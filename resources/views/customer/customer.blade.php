@extends('layout.layout')
@section('title') customer @endsection
<style>
    .continer{
        margin-top: 100px;
        margin-left: 280px;
    }
</style>
@section('content')
<div class="continer">


<form action="{{ route('create.customer') }}" method="post">
@csrf
<label for="branch">Branch Id</label> <br>
<input class="form-controller" type="text" name="branch_id"><br>
<label for="first_name">First Name</label> <br>  
 <input class="form-controller" type="text" name="first_name"><br>
 <label for="lastName">Last Name</label><br>
 <input class="form-controller" type="text" name="last_name"><br>
 <label for="Mobile">Mobile</label><br>
 <input class="form-controller" type="text" name="mobile"><br>
 <label for="email">Email</label><br>
 <input class="form-controller" type="email" name="email"><br>
 <label for="password">Password</label><br>
 <input class="form-controller" type="password" name="password"><br>
 <label for="dob">Date of Birth</label><br>
 <input class="form-controller" type="date" name="dob"><br><br>
 <input class="form-controller" type="submit" class="submit" id="submit">
</form>
</div>
@endsection