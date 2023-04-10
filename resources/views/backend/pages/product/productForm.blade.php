@extends('backend.master')
@section('content')


<form action="{{route('product.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <input type="text" name="category" class="form-control" id="exampleInputPassword1" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" name="description" class="form-control" id="exampleInputPassword1" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Size</label>
    <input type="text" name="size" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Color</label>
    <input type="text" name="color" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Quantity</label>
    <input type="number" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection