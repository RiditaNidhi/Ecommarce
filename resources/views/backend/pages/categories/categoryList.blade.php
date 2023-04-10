@extends('backend.master')
@section('content')

<h3>The Category List</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($categories as $category)

    <tr>
      <th >{{$category->id}}</th>
      <th >{{$category->name}}</th>
      <th >{{$category->type}}</th>
      <th><a class="btn btn-success">Edit</a><a class="btn btn-danger">Delete</a></th>
    </tr>
  @endforeach
    
  </tbody>

</table>
<br>
<a href="{{route('category.form')}}" class="btn btn-success">Add new Category</a>





@endsection()