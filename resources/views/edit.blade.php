@extends('layouts.index')

@section('title')
edit student
@endsection

@section('content')
<div class="container">
    <form method="post" action="{{ route('studentupdate',$data['id']) }}" style="font-size:20px;margin-top:30px;">
        @csrf
        <div class="mb-3">
          <label for="student_name" class="form-label">Student Name</label>
          <input type="text" class="form-control" name="student_name" id="student_name" value="{{ old('student_name', $data['studentname']) }}">
        </div>
        @error('student_name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
          <label for="student_mail" class="form-label">Student email</label>
          <input type="email" class="form-control" name="student_mail" id="student_mail" value="{{ old('student_mail', $data['studentmail']) }}">
        </div>
        @error('student_mail')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="mb-3">
            <label for="student_phone" class="form-label">Student phone</label>
            <input type="text" class="form-control" name="student_phone" id="student_phone" value="{{ old('student_phone',$data['studentphone']) }}">
          </div>
          @error('student_phone')
          <span class="text-danger">{{ $message }}</span>
          @enderror
        <div class="mb-3">
            <label for="updated_date" class="form-label">Updated Date</label>
            <input type="text" class="form-control" name="updated_date" id="updated_date" value = "{{ date('Y-m-d H:i:s') }}">
          </div>

        <button type="submit" class="btn btn-primary">edit Student</button>
      </form>    </h1>
</div>
@endsection
