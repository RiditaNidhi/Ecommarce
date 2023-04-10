@extends('backend.master')
@section('content')
<a href="{{route('product.form')}}" class="btn btn-success">Add new</a>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col">Size</th>
      <th scope="col">Image</th>
      <th scope="col">Color</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  @foreach($products as $product)
    <tr>
      
      <td>{{$product->id}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->category}}</td>
      <td></td>
      <td>{{$product->size}}</td>
      <td>{{$product->image}}</td>
      <td>{{$product->color}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->status}}</td>
      <td>{{$product->price}}</td>
      <td><a class="btn btn-danger" href="">Delete</a>
      <a class="btn btn-success" href="">Edit</a></td>
    </tr>
    
  @endforeach
  </tbody>
</table>







@endsection()