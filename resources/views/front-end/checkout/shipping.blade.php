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
			<h3 class="title">Dear {{Session::get('customerName')}}. You have to give us product shipping info to complete your valuable order. If your billing info & shipping info are same then just press on save shipping info button.</h3>
	</div>

<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".7s">
			<h3 class="title">Shipping<span> Info</span></h3>
		</div>
		<div class="widget-shadow wow fadeInUp animated" data-wow-delay=".9s">
			{{ Form::open(['route'=>'new-shipping','method'=>'post', 'class'=>'wow fadeInUp animated" data-wow-delay="1s'])}}
			<div class="login-body">
				<div>
				<label>Full Name</label>
				<input type="text" value="{{ Session::get('customerName')}}" name="full_name" placeholder="Full Name" onKeyUP="this.value = this.value.toUpperCase();" autocomplete="off">
				<b><span class="alert-danger">{{ $errors->has('full_name') ? $errors->first('full_name') : ''}}</span></b>
				</div>
				<div>
					<label>Mobile Number</label>
					<input type="text" value="{{ Session::get('mobileNumber') }}" name="mobile_number" placeholder="Mobile Number" autocomplete="off">
				<b><span class="alert-danger">{{ $errors->has('mobile_number') ? $errors->first('mobile_number') : ''}}</span></b>
				</div>
				<div>
					<label>Shipping Address</label>
					<input value="{{ Session::get('mailingAddress') }}" type="text" name="shipping_address" placeholder="Mailing Address" autocomplete="off">
				<b><span class="alert-danger">{{ $errors->has('shipping_address') ? $errors->first('shipping_address') : ''}}</span></b>
				</div>
				<div>
					<label>Shipping Email Address</label>
					<input type="text" value="{{Session::get('emailAddress') }}" name="email_address" class="email" placeholder="Email Address" autocomplete="off">
				<b><span class="alert-danger">{{ $errors->has('email_address') ? $errors->first('email_address') : ''}}</span></b>
				</div>
				<div>
					<input type="submit" name="btn" class="btn btn-success btn-block" value="Save Shipping Info">
				</div>
			</div>
			 {{ Form::close()}}
		</div>
	</div>

@endsection