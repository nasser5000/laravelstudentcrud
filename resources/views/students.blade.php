@extends('layouts.index')

@section('title')
| students
@endsection
@section('serachform')
<form method="get" action ="{{ route('studentsearch')}}" class="d-flex" role="search">
    <input style="width:300px;font-size:18px;" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="query" name="query" value="{{ old('query') }}">
    <button style="margin-right:20px;font-size:18px;font-weight:bold" class="btn btn-outline-success" type="submit">Search</button>
  </form>
@endsection
@section('content')
<div style="height:1000px" class="container">
    @if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <script>
        function deleteconfirm() {
            if(!confirm("Are You Sure to delete this"))
            event.preventDefault();
        }
       </script>
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
                    <a style="margin:8px" href="{{ route('studentedit',$info['id'])}}"><i class="fa-solid fa-pen-to-square fa-sm"></i></a>
                    <a style="margin:8px" href="{{ route('studentdelete',$info['id'])}}" onclick="return deleteconfirm();"><i class="fa-solid fa-trash fa-sm"></i></a>
                </td>
                  </tr>
                @endforeach
                @else
                  no data available
                @endif
            </tbody>
          </table>
{{ $data->links() }}
        </div>
@endsection
