@extends('layout.layout')
@section('title') Login @endsection
<style>
    .continer{
        margin-top: 100px;
        width: 300px;
        margin-left: 250px;
        font-style: oblique;
    }
</style>
@section('content')
<div class="continer">
    <h3>Login</h3>
    <form action="{{ route('userLogin') }}" method="post">
        @csrf
    <div class="row">
        <label for="email">Email</label>
       <input type="email" class="form-controller" name="email" >
       @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
    </div><br>
    <div class="row">
        <label for="password">Password</label>
        <input type="password" class="form-controller" name="password">
        @error('password') <div class="alert alert-danger">{{ $message }}</div> @enderror
    </div><br>
    <input type="submit" class="btn btn-outline-primary">
</form>
</div>
@endsection
