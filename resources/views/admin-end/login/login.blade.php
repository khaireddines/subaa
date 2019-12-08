<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Suba Admin Login Pannel</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{ asset('/') }}/admin-end/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset('/') }}/admin-end/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="{{ asset('/') }}/admin-end/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="{{ asset('/') }}/admin-end/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->

		<style type="text/css">
			body { background: url(admin-end/img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="#"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2>Login to your account</h2>
					{!! Form::open(['url'=>'/login','method'=>'POST']) !!}
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								{{ Form::email('email',null,['class'=>'form-control','placeholder'=>'enter your email ID'])}}
									@error('email')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                @enderror
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								{{ Form::password('password',['class'=>'form-control','placeholder'=>'enter your password'])}}
								 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="clearfix"></div>
							
							<div class="checkbox">
								<label>{{ Form::checkbox('name','rememberMe')}} Remember Me</label>
							</div>

							<div class="form-group">
								{{ Form::submit('Login',['class'=>'btn btn-success btn-block','name'=>'btn'])}}
							</div>
							<div class="clearfix"></div>
					{!! Form::close() !!}
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="{{ asset('/') }}/admin-end/js/jquery-1.9.1.min.js"></script>
		<script src="{{ asset('/') }}/admin-end/js/jquery-migrate-1.0.0.min.js"></script>
		<script src="{{ asset('/') }}/admin-end/js/jquery-ui-1.10.0.custom.min.js"></script>
		<script src="{{ asset('/') }}/admin-end/js/jquery.uniform.min.js"></script>
		<script src="{{ asset('/') }}/admin-end/js/jquery.cleditor.min.js"></script>
		<script src="{{ asset('/') }}/admin-end/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
