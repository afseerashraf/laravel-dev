@extends('layout.layout')
@section('title')list @endsection
@section('content')

<h5>
    @if (session()->has('message'))
        {{ session('message') }}
    @endif
</h5>
<a href="{{ route('create') }}" class="btn btn-outline-success">New</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Student Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Cource</th>
      <th>Action</th>


    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $student->student_name }}</td>
      <td>{{ $student->email }}</td>
      <td>{{ $student->mobile }}</td>
      <td>{{ $student->dob }}</td>
      <td>{{ $student->cource }}</td>
      <td><a href="{{ route('edit', encrypt($student->id)) }}" class="btn btn-outline-primary">Edit</a><a href="{{ route('student.delete', encrypt($student->id)) }}" class="btn btn-outline-danger">Delete</a></td>
    </tr>
    @endforeach
   
  </tbody>
</table>
@endsection