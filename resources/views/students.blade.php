@extends('layouts.index')

@section('title')
| students
@endsection

@section('content')
<div class="container">
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <a style="margin:10px 0px;" class="btn btn-lg btn-success" href="{{ route('studentcreate') }}">Add New Student</a>
    <table style="font-size:20px" class="table table-striped">
        <thead>
          <tr>
            <th scope="col">student No</th>
            <th scope="col">student name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @if (!empty($data))
            @foreach ($data as $info )
            <tr>
                <td>{{ $info->id}}</td>
                <td>{{ $info->studentname }}</td>
                <td>{{ $info->studentmail }}</td>
                <td>{{ $info->studentphone }}</td>
                <td>
                    <a style="margin:8px" href="{{ route('studentshow',$info['id']) }}"><i class="fa-solid fa-eye fa-sm"></i></a>
                <a style="margin:8px" href="#"><i class="fa-solid fa-pen-to-square fa-sm"></i></a>
                <a style="margin:8px" href="#"><i class="fa-solid fa-trash fa-sm"></i></a>
            </td>
              </tr>
            @endforeach
            @else
              no data available
            @endif
        </tbody>
      </table>

</div>
  @endsection
