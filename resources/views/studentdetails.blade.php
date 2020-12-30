@extends('layout.default')

@section('content')
<h1>Student Details</h1>

<table class="table table-bordered scontent">
	<thead>
		<th>Student name</th>
    <th>Father name</th>
    <th>class</th>
    <th>phone number</th>
    <th>email</th>
    <th>Course ID</th>
    <th>Edit</th>
		<th>Delete</th>
	</thead>
	<tbody>
    @foreach($student as $std)
    <tr>
      <td>{{$std->sname}}</td>
      <td>{{$std->fname}}</td>
      <td>{{$std->class}}</td>
      <td>{{$std->phnum}}</td>
      <td>{{$std->email}}</td>
      <td>{{$std->course}}</td>
      <td><a href="edit/{{$std->id}}" class='btn btn-default'>Edit</a></td>
      <td><a href="delete/{{ $std->id }}" class='btn btn-default'>Delete</a></td>
    </tr>
    @endforeach
	</tbody>
</table>
@endsection
