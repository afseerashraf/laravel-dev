@extends('layout.layout')
@section('title') edit @endsection
@section('content')
<div class="card-body">
    <form action="{{ route('student.updated') }}" method="post">
        @csrf
        <div class="form-group">
        <input type="hidden" name="id" id="id" value="{{encrypt($student->id)}}">

            <label for="studentName">Student Name</label>
            <input type="text" class="form-control" name="studentName" id="studentName" value="{{ $student->student_name }}" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $student->email }}" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile Number</label>
            <input type="text" class="form-control" name="mobile" id="mobile" value="{{ $student->mobile }}" placeholder="Enter mobile number">
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" name="dob" value="{{ $student->dob }}" id="dob">
        </div><br>
        <select class="form-select" name="cource"  aria-label="Default select example">
            <option selected>{{ $student->cource }}</option>
            <option value="Webdevelopment">webdevelopment</option>
            <option value="Ethickal Hacking">Ethical Hacking</option>
            <option value="Uxdesign">UX Design</option>
        </select>
        <br>

        <button type="submit" class="btn btn-primary btn-block">update</button>
    </form>
</div>
@endsection