@extends('layout.layout')
@section('title') information form @endsection
<style>
    .form-group {
        input {
            font-weight: 200;
        }

        label {
            font-style: oblique;
        }
    }
</style>
@section('content')

<div class="card-body">
    <form action="{{ route('create.student') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="firstName">Studnet Name</label>
            <input type="text" class="form-control" name="studentName" id="studentName" placeholder="Enter name">
           @error('studentName') <div class="alert alert-danger">{{ $message }} </div> @enderror
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
           @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="mobile">Mobile Number</label>
            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter mobile number">
        @error('mobile') <div class="alert alert-danger">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" name="dob" id="dob">
            @error('dob') <div class="alert alert-danger">{{ $message}}</div> @enderror
        </div><br>
        <select class="form-select" name="cource" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="Webdevelopment">web development</option>
            <option value="Ethickal Hacking">Ethical Hacking</option>
            <option value="Uxdesign">UX Design</option>
            @error('cource') <div class="alert alert-danger">{{ $message }}</div> @enderror

        </select>
        <br>

        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>
@endsection