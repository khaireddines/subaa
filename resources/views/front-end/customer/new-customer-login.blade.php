@extends('front-end.master')
@section('title')
	Customer Login Form
@endsection
@section('body')
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{ asset('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Customer Login Page</li>
			</ol>
		</div>
	</div>
	<!--Customer Login Form-->
<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">Login<span> Form</span></h3>
			<h3 class="title text-center"></h3>
		</div>
		<div class="widget-shadow">
			<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
				<h4>Welcome back to Suba e-Commerce !</h4>
			</div>
			<div class="login-body wow fadeInUp animated" data-wow-delay=".7s">
			{{ Form::open(['route'=>'new-customer-login','method'=>'post', 'class'=>'wow fadeInUp animated" data-wow-delay=".9s'])}}
			<div class="login-body">
				<input type="text" name="email_address" class="email" placeholder="Email Address" autocomplete="off">
				<b><span class="alert-danger">{{ $errors->has('email_address') ? $errors->first('email_address') : ''}}</span></b>
				<input id="password" type="password" name="password" class="lock" placeholder="Password">
				<b><span class="alert-danger">{{ $errors->has('password') ? $errors->first('password') : ''}}</span></b>
				<input type="submit" name="btn" value="SignIn">
			</div>
			 {{ Form::close()}}
			</div>
		</div>
		<div class="login-page-bottom">
			<h5> - OR -</h5>
			<div class="social-btn"><a href="#"><i>Sign In with Facebook</i></a></div>
			<div class="social-btn sb-two"><a href="#"><i>Sign In with Twitter</i></a></div>
		</div>
	</div>

@endsection