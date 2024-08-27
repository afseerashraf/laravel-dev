@extends('layout.layout')
@section('title') detiles @endsection
@section('content')


<ul>
    <li>Branch: {{ $branch->name }}</li>
    <li>Customer Name: {{ $branch->customer->first_name }}</li>

</ul>


@endsection