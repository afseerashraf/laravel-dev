@extends('layout.layout')
@section('title') detiles @endsection
<style>
    .continer{
        margin-left: 200px;
        margin-top: 200px;
    }
</style>
@section('content')


<h3>Customer Login</h3>
<div class="continer">
<form action="{{route('customerLogin')}}" method="post">
    @csrf
    <input type="email" name="email" placeholder="email"><br><br>
    @error('email') <div class="alert">{{ $message }}</div> @enderror
    <input type="password" name="password" placeholder="password"><br><br>
    @error('password') <div class="alert">{{ $message }}</div> @enderror
    <input type="submit" value="sumbit">
</form>
</div>
@endsection