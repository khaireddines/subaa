
	<div class="top-header navbar navbar-default"><!--header-one-->
		<div class="container">
			<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
				<p>Welcome to Suba Ecommerce<a href="{{ route('checkout')}}">Register </a> Or 
					@if(Session::get('customerId'))
					<a href="#" onclick="document.getElementById('customerLogoutForm').submit();">Logout </a>
					{{ Form::open(['route'=>'customer-logout','method'=>'POST','id'=>'customerLogoutForm'])}}
					{{ Form::close()}}
				@else
				<a href="{{ route('customer-login')}}">Sign In </a> 
				@endif
				</p>
			</div>
			<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated" data-wow-delay=".5s">
				<ul>
				<li><h4><b>{{ Session::get('customerName')}}</b></h4></li>
				<li><a href="#"></a></li>
				<!-- <li><a href="#" class="pin"> </a></li>
				<li><a href="#" class="in"> </a></li>
				<li><a href="#" class="be"> </a></li> -->
				<li><a href="#" class="you"> </a></li>
				<!-- <li><a href="#" class="vimeo"> </a></li> -->
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header-two navbar navbar-default"><!--header-two-->
		<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">mail@example.com</a></li>			
					</ul>
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="{{ asset('/') }}">Modern <b>Shoppe</b><span class="tag">Everything for Kids world </span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						<a href="{{ asset('contact-us') }}"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> CONTACT US</a>						
					</div>
					<div class="header-right cart">
						<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
					<h4><a href="{{route('show-cart')}}">
						<span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>) 
					</a></h4>
							<div class="cart-box">
								<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
							</div>
						</div>
					<div class="clearfix"> </div>
					</div>
				<div class="clearfix"> </div>
				</div>
		</div>
<div class="header sticky-top">
		<div class="top-nav navbar navbar-default"><!--header-three-->
					<div class="container">
						<nav class="navbar" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
							</div>
						<!--navbar-header-->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav top-nav-info">
							<li><a href="{{ asset('/') }}" class="active">Home</a></li>
							@if( $roots !=Null)
							@foreach($roots as $root)
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$root->rootCategoryName}}<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column1">
									
									<div class="row">								
							
									@foreach ($categories as $category)
										@if ($category->rootCategoryId == $root->id)
												<div class="col-sm-4 menu-grids menulist1">
													<ul class="multi-column-dropdown ">
														<li><a class="list" href="{{ route('category-product',['id' =>$category->id]) }}">{{$category->categoryName }}</a></li>
													</ul>
												</div>								
										@endif	
									@endforeach

										<!-- @foreach($categories as $category)
										<div class="col-sm-4 menu-grids menulist1">
											<ul class="multi-column-dropdown ">
												<li><a class="list" href="{{ route('category-product',['id' =>$category->id]) }}">{{ $category->id.$category->categoryName }}</a></li>
											</ul>
										</div>	
										@endforeach	
										-->

									</div>
									
								</ul>
							</li>
							@endforeach
							@endif
							<!-- <li><a href="codes.html">Special Offers</a></li> -->
							</ul> 
						<div class="clearfix"> </div>
						<!--//navbar-collapse-->
						<header class="cd-main-header pull-right">
						<ul class="cd-header-buttons">
							<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
						</ul> <!-- cd-header-buttons -->
						</header>
						</div>
						<!--//navbar-header-->
						</nav>
					<div id="cd-search" class="cd-search">
						<form>
						<input type="search" placeholder="Search...">
						</form>
					</div>
			</div>

	</div>
</div>