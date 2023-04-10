@extends('backend.master')
@section('content')


<h3>Customer Details</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>


  @foreach($customers as $customer)
    <tr>
      <th>{{$customer->id}}</th>
      <td>{{$customer->name}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->contact}}</td>
      <td>{{$customer->address}}</td>
      <td><a class="btn btn-danger" href="{{route('customer.delete',$customer->id)}}">Delete</a>
      <a class="btn btn-success" href="">Edit</a></td>
      
      
    </tr>
    
  @endforeach
  
  </tbody>
</table>
<br>
<a href="{{route('customer.form')}}" class="btn btn-outline-primary">Add new </a>






@endsection()