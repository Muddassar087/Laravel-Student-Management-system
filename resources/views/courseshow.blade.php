@extends('layout.default')

@section('content')
<h1>Course details</h1>
<table class="table table-bordered">
	<thead>
		<th>Course ID</th>
		<th>Class</th>
		<th>Course Name</th>
		<th>Edit</th>
	</thead>
	<tbody>
		@foreach($courses as $course)
		<tr>
			<td>{{$course->id}}</td>
			<td>{{$course->class}}</td>
			<td>{{$course->name}}</td>
			<td><a href="deleteCourse/{{$course->id}}" class='btn btn-primary'>delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection