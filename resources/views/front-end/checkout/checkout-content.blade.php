@extends('front-end.master')
@section('title')
	Customer Registration
@endsection
@section('body')
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="{{ asset('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Customer Registraion Page</li>
			</ol>
		</div>
	</div>
	<!--Registration-->
<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">Registration<span> Form</span></h3>
			<p></p>
		</div>
		<div class="widget-shadow">
			<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
				<h4>Already have an Account ?<a href="{{ route('sign-in')}}">  Sign In »</a> </h4>
			</div>
			{{ Form::open(['route'=>'customer-sinup-form', 'method'=>'post', 'class'=>'wow fadeInUp animated" data-wow-delay=".9s'])}}
			<div class="login-body">
				<input type="text" name="first_name" placeholder="First Name" onKeyUP="this.value = this.value.toUpperCase();" autocomplete="off">
				<b><span class="alert-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : ''}}</span></b>
				<input type="text" name="last_name" placeholder="Last Name" onKeyUP="this.value = this.value.toUpperCase();" autocomplete="off">
				<b><span class="alert-danger">{{ $errors->has('last_name') ? $errors->first('last_name') : ''}}</span></b>
				<input type="text" name="mobile_number" placeholder="Mobile Number" autocomplete="off">
				<b><span class="alert-danger">{{ $errors->has('mobile_number') ? $errors->first('mobile_number') : ''}}</span></b>
				<input type="text" name="mailing_address" placeholder="Mailing Address" autocomplete="off">
				<b><span class="alert-danger">{{ $errors->has('mailing_address') ? $errors->first('mailing_address') : ''}}</span></b>
				<input type="text" name="email_address" id="email_address" class="email" placeholder="Email Address" autocomplete="off">
				<b><span class="text-success" id="res"></span></b>
				<b><span class="alert-danger">{{ $errors->has('email_address') ? $errors->first('email_address') : ''}}</span></b>
				<input id="password" type="password" name="password" class="lock" placeholder="Password">
				<b><span class="alert-danger">{{ $errors->has('password') ? $errors->first('password') : ''}}</span></b>

				<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="off" placeholder="Confirm Password">
				<b><span class="alert-danger">{{ $errors->has('password_confirmation') ? $errors->first('password_confirmation') : ''}}</span></b>
				<input type="submit" id="regBtn" name="Register" value="Register">
			</div>
			 {{ Form::close()}}
		</div>
	</div>

<script>
	var email_address = document.getElementById('email_address');
	email_address.onblur = function() {
		var email = document.getElementById('email_address').value;
		var xmlHttp = new XMLHttpRequest();
		var serverPage= 'http://localhost/suba/public/ajax-email-check/'+email;
		xmlHttp.open('GET', serverPage);
		xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			document.getElementById('res').innerHTML = xmlHttp.responseText;
			if (xmlHttp.responseText == 'Already Exist') {
				document.getElementById('regBtn').disabled = true;
			} else {
				document.getElementById('regBtn').disabled = false;
			}
		}
	}
	xmlHttp.send(null);
	}
</script>

@endsection