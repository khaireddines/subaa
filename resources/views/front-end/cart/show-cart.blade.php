@extends('front-end.master')
@section('title')
	Product Checkout
@endsection
@section('body')
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Check Out page</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--cart-items-->
<div class="content">
  <h1 class="wow fadeInUp animated text-center" data-wow-delay=".5s">My Shopping Cart</h1>
  <p></p>
  <p></p>
    <div class="single-w13">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<hr/>
					<table class="table table-bordered">
						<tr class="bg-primary">
							<th class="active">S/N.</th>
							<th class="active">Name</th>
							<th class="active">Image</th>
							<th class="active">Price Tk.</th>
							<th class="active">Quantity</th>
							<th class="active">Total Price Tk.</th>
							<th class="active">Action</th>
						</tr>
						@php($i = 1)
						@php($sum = 0)
						@foreach($cartCollections as $cartCollection)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{ $cartCollection->name }}</td>
							<td><img src="{{ asset($cartCollection->attributes->image)}}" alt="" height="50" width="50" /></td>
							<td>{{ $cartCollection->price }}</td>
							<td>
								{{ Form::open(['route'=>'update-cart','method'=>'POST'])}}
									<input type="number" name="quantity" value="{{ $cartCollection->quantity }}" min="1">
									<input type="hidden" name="id" value="{{ $cartCollection->id }}">
									<input type="submit" name="btn btn-success" value="Update">
								{{ Form::close()}}
							</td>
							<td>{{ $total = $cartCollection->price*$cartCollection->quantity }}</td>
							<td>
								<a href="{{ route('delete-cart-item',['id'=>$cartCollection->id])}}" class="btn btn-danger btn-xs" title="Delete">
									<span class="glyphicon glyphicon-trash"></span>
								</a>
							</td>
						</tr>
						<?php $sum = $sum+$total; ?>
						@endforeach
					</table>
					<hr/>
					<table class="table table-bordered">
						<tr>
							<th>Item Price (Tk. )</th>
							<td>{{ $sum }}</td>
						</tr>
						<tr>
							<th>Vat Total (Tk. )</th>
							<td>{{ $vat = 0 }}</td>
						</tr>
						<tr>
							<th>Shipping Fees (Tk. )</th>
							<td>{{ $fees = 0 }}</td>
						</tr>
						<tr>
							<th>Grand Total (Tk. )</th>
							<td><b>{{ $totalorder = $sum+$vat+$fees }}</b></td>
							<?php
								Session::put('totalorder', $totalorder);
							?>
						</tr>
					</table>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					@if(Session::get('customerId') && Session::get('shippingId'))
					<a href="{{ route('checkout-payment')}}" class="btn btn-success pull-right">Checkout</a>
					@elseif(Session::get('customerId'))
					<a href="{{ route('checkout-shipping')}}" class="btn btn-success pull-right">Checkout</a>
					@else
					<a href="{{ route('sign-in')}}" class="btn btn-success pull-right">Checkout</a>
					@endif
					<a href="" class="btn btn-success">Continue Shopping</a>	
				</div>
			</div>
			<hr/>

		</div>
	</div>
</div>
			
@endsection