@extends('students')
@section('content')
<div class="container">
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
        @if (!empty($studentname))
        @foreach ( $studentname as $info )
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
    {{ $studentname->links() }}

</div>
@endsection
