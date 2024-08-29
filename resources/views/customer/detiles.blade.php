@extends('layout.layout')
@section('title') detiles @endsection
@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">customer Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scop="col">Branch</th>
 
     


    </tr>
  </thead>
  <tbody>
    @foreach($customers as $customer)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $customer->first_name }}</td>
      <td>{{ $customer->mobile }}</td>
      <td>{{ $customer->email }}</td>
      <td>{{ $customer->customerBranch?->name }}</td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection