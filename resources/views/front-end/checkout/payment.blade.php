@extends('front-end.master')
@section('title')
	Shipping
@endsection
@section('body')
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			<li><a href="{{ asset('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li class="active">Shipping Page</li>
		</ol>
	</div>
</div>
	<!--Registration-->

<div class="col-md-12 title-info wow fadeInUp animated" data-wow-delay=".5s">
	<h3 class="title">Dear {{Session::get('customerName')}}. Please select your payment method...........</h3>
</div>

<div class="login-page">
	<div class="title-info wow fadeInUp animated" data-wow-delay=".7s">
		<h3 class="title">Payment<span> Info</span></h3>
	</div>
	<div class="row">
		<div class="widget-shadow wow fadeInUp animated" data-wow-delay=".9s">
			{{ Form::open(['route'=>'new-order', 'method'=>'post']) }}
				<table class="table table-border">
					<tr>
						<th>Cash on Delivery</th>
						<td><input type="radio" name="payment_type" value="Cash"> Cash on Delivery </td>
					</tr>
					<tr>
						<th>Paypal</th>
						<td><input type="radio" name="payment_type" value="Paypal">Paypal</td>
					</tr>
					<tr>
						<th>BKash</th>
						<td><input type="radio" name="payment_type" value="BKash">BKash</td>
					</tr>
					<tr>
						<th></th>
						<td><input type="submit" name="btn" value="Confirm Order"></td>
					</tr>
				</table>
			{{ Form::close() }}
		</div>
	</div>
		
</div>

@endsection