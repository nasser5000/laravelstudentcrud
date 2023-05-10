<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\createstudentrequest;
use App\Http\Requests\updatestudentrequest;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //show all students
        $data=Student::select('*')->orderby('id', 'ASC')->paginate(10);
        return view('students',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //show input form for students
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createstudentrequest $request)
    {
        // store the student in database
        $datafrominsert['studentname'] = $request->student_name;
        $datafrominsert['studentmail'] = $request->student_mail;
        $datafrominsert['studentphone'] = $request->student_phone;
        $datafrominsert['created_at'] = $request->created_date;
        $datafrominsert['updated_at'] = $request->updated_date;
        Student::create($datafrominsert);
        return redirect()->route('studentsindex')->with(['success'=>'studented add successfully']);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // show student details
        $data=Student::select("*")->find($id);
        return view('showstudent',['data'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //edit a student details
        $dataforedit=Student::select("*")->find($id);
        return view('edit',['data'=>$dataforedit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updatestudentrequest $request, $id)
    {
        // update a student details
        $datafromupdate['studentname'] = $request->student_name;
        $datafromupdate['studentmail'] = $request->student_mail;
        $datafromupdate['studentphone'] = $request->student_phone;
        $datafromupdatet['updated_at'] = $request->updated_date;
        Student::where(['id'=>$id])->update($datafromupdate);
        return redirect()->route('studentsindex')->with(['success'=>'studented updated successfully']);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //delete student from storage

        Student::where(['id'=>$id])->delete($id);
        return redirect()->route('studentsindex')->with(['success'=>'studented deleted successfully']);

    }
    public function search($name){
        $data=Student::where(['studentname'=>$name])->get();
        return redirect()->route('studentsindex');
    }
}
