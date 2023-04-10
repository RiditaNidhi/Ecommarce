@extends('backend.master')
@section('content')


<h3>The Payment List</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Order ID</th>
      <th scope="col">Amount</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Payment Status</th>
    </tr>
  </thead>
  <tbody>

  @foreach($payments as $payment)
    <tr>
      <th >{{$payment->id}}</th>
      <td>{{$payment->customer_id}}</td>
      <td>{{$payment->order_id}}</td>
      <td>{{$payment->amount}}</td>
      <td>{{$payment->method}}</td>
      <td><a  class="btn btn-outline-success" href="">Paid</a>
      <a class="btn btn-outline-warning" href="">Pending</a></td>
      
    </tr>
   @endforeach
  </tbody>
</table>
<br>
<a href="{{route('pay.form')}}" class="btn btn-success">Add new </a>








@endsection()