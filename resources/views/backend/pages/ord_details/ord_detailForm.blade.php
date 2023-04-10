@extends('backend.master')
@section('content')


<form action="{{route('ord_detail.store')}}" method="post">
@csrf
<div>
<label for="" >Product ID</label>
<input type="number" class="form-control" name="product_id">
</div>
<div>
<label for="" >Quantity</label>
<input type="number" class="form-control" name="quantity">
</div>
<div>
<label for="" >Unit Price</label>
<input type="number" class="form-control" name="unit_price">
</div>

<div>
<label for="" >Total Price</label>
<input type="number" class="form-control" name="total_price">
</div>

<div>
    <label for="">Payment Method</label>
    <input type="radio" class="form-control" name="method">
</div>

<div>
    <label for="">Date</label>
    <input type="date" class="form-control" name="date">
</div>

<br>
<button type="submit" class="btn btn-outline-info">Submit</button>



</form>



@endsection()