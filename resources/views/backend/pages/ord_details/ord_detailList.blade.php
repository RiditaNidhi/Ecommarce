@extends('backend.master')
@section('content')


<h3>Order Details</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product ID</th>
      <th scope="col">Quantity</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Total price</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
   
  </tbody>
</table>
<br>
<a href="{{route('ord_detailform')}}" class="btn btn-outline-primary">Add new </a>






@endsection()