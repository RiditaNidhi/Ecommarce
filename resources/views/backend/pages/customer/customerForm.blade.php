@extends('backend.master')
@section('content')


<form action="{{route('customer.store')}}" method="post">
    @csrf

<div>
<label for="" >Customer Name</label>
<input type="text" name="name" class="form-control">
</div>
<div>
    <label for="">Email</label>
    <input type="email"  class="form-control" name="email">
</div>
<div>
<label for="" >Contact</label>
<input type="number" class="form-control" name="contact">
</div>
<div>
<label for="" >Address</label>
<input type="text" name="address" class="form-control">
</div><br>
<button type="submit" class="btn btn-info">Submit</button>

</form>

@endsection()