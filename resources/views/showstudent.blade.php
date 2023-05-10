@extends('layouts.index')

@section('title')
| show student
@endsection

@section('content')
<div class="container">
    <table style="font-size:20px" class="table table-striped mytable">
        <thead>
        <tbody>
            @if (!empty($data))
            <tr>
                <td class="showtudent">Student No</td>
                <td>{{ $data->id}}</td>
            </tr>
            <tr>
                <td class="showtudent">Student name</td>
                <td>{{ $data->studentname }}</td>
            </tr>
            <tr>
                <td class="showtudent">ٍStudent mail</td>
                <td>{{ $data->studentmail }}</td>
            </tr>
            <tr>
                <td class="showtudent">Student Phone</td>
                <td>{{ $data->studentphone }}</td>
            </tr>
            <tr>
                <td class="showtudent">Created Date</td>
                <td>{{ $data->created_at }}</td>
            </tr>
            <tr>
                <td class="showtudent">Updated Date</td>
                <td>{{ $data->updated_at }}</td>

            </tr>
            @else
              no data available
            @endif
        </thead>
        </tbody>
      </table>

</div>
  @endsection
