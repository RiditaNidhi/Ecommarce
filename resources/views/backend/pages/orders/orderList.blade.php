@extends('backend.master')
@section('content')


<h3>The Order List</h3>
<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">User ID</th>
      <th scope="col">Payment ID</th>
      <th scope="col">Details</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

  @foreach($orders as $order)
    <tr>
      <th >{{$order->id}}</th>

      <td>{{$order->user_id}}</td>
      <td>{{$order->pay_id}}</td>
      <td><a class="btn btn-outline-dark" href="">View Details</a></td>
      
      <td><a  class="btn btn-outline-success" href="">Paid</a>
      <a class="btn btn-outline-warning" href="">Pending</a></td>
      
    </tr>
    

@endforeach
  </tbody>
</table>
<br>
<a href="{{route('order.form')}}" class="btn btn-primary">Add new </a>
<a href="" class="btn btn-info">View All Order Details </a>







@endsection()