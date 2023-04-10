@extends('backend.master')
@section('content')

<form action="{{route('category.store')}}" method="post">
@csrf
<div>
<label for="" >Category Name</label>
<input type="text" class="form-control" name="name">
</div>
<div>
    <label for="">Type</label>
    <input type="text" class="form-control" name="type">
</div>

<br>
<button type="submit" class="btn btn-info">Submit</button>




</form>


@endsection()