@extends('layouts.index')

@section('title')
| students
@endsection

@section('content')
<div class="container">
    <a style="margin:10px 0px;" class="btn btn-lg btn-success" href="">Add New Student</a>
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
              </tr>
            @endforeach
            @else
              no data available
            @endif
        </tbody>
      </table>

</div>
  @endsection
