@extends('backend.master')
@section('content')


<form action="{{route('order.store')}}" method="post">
@csrf
<div>
<label for="" >User ID</label>
<input type="number" class="form-control" name="user_id">
</div>
<div>
    <label for="">Payment ID</label>
    <input type="number" class="form-control" name="pay_id" >
</div>


<br>
<button type="submit" class="btn btn-info">Submit</button>




</form>





@endsection()