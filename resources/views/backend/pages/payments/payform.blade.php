@extends('backend.master')
@section('content')


<form action="{{route('pay.store')}}" method="post">
@csrf
<div>
<label for="" >Customer ID</label>
<input type="number" class="form-control" name="customer_id">
</div>
<div>
    <label for="">Order ID</label>
    <input type="number" class="form-control" name="order_id">
</div>
<div>
    <label for="">Amount</label>
    <input type="number" class="form-control" name="amount">
</div>

<div>
    <label for="">Payment Method</label>
    <input type="text" class="form-control" name="method" >
</div>

<br>
<button type="submit" class="btn btn-info">Submit</button>






</form>





@endsection()