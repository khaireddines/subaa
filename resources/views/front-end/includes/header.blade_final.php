<div class="header">
<div class="top-header navbar navbar-default"><!--header-one-->
<div class="container">
<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
<p>Welcome to Modern Shoppe <a href="register.html">Register </a> Or <a href="signin.html">Sign In </a></p>
</div>
<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated" data-wow-delay=".5s">
<ul>
<li><a href="#"> </a></li>
<li><a href="#" class="pin"> </a></li>
<li><a href="#" class="in"> </a></li>
<li><a href="#" class="be"> </a></li>
<li><a href="#" class="you"> </a></li>
<li><a href="#" class="vimeo"> </a></li>
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
<h1><a href="index.html">Modern <b>Shoppe</b><span class="tag">Everything for Kids world </span> </a></h1>
</div>
<div class="nav navbar-nav navbar-right header-two-right">
<div class="header-right my-account">
<a href="{{ asset('contact-us') }}"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> CONTACT US</a>						
</div>
<div class="header-right cart">
<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
<h4><a href="checkout.html">
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
@foreach($categories as $category)
<!-- <li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $category->categoryName }}<b class="caret"></b></a> -->

	<li><a href="{{ route('category-product',['id' =>$category->id]) }}" class="active">{{ $category->categoryName }}</a>
	<!-- 
	<ul class="dropdown-menu multi-column multi-column1">
		
									<div class="row">
										<div class="col-sm-4 menu-grids menulist1">
											<h4>Bath & Care</h4>
											<ul class="multi-column-dropdown ">
												<li><a class="list" href="products.html"></a></li>
												<li><a class="list" href="products.html">Baby Wipes</a></li>
												<li><a class="list" href="products.html">Baby Soaps</a></li>
												<li><a class="list" href="products.html">Lotions & Oils </a></li>
												<li><a class="list" href="products.html">Powders</a></li>
												<li><a class="list" href="products.html">Shampoos</a></li>
											</ul>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.html">Body Wash</a></li>
												<li><a class="list" href="products.html">Cloth Diapers</a></li>
												<li><a class="list" href="products.html">Baby Nappies</a></li>
												<li><a class="list" href="products.html">Medical Care</a></li>
												<li><a class="list" href="products.html">Grooming</a></li>
												<li><h6><a class="list" href="products.html">Combo Packs</a></h6></li>
											</ul>
										</div>																		
										<div class="col-sm-2 menu-grids">
											<h4>Baby Clothes</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.html">Onesies & Rompers</a></li>
												<li><a class="list" href="products.html">Frocks</a></li>
												<li><a class="list" href="products.html">Socks & Tights</a></li>
												<li><a class="list" href="products.html">Sweaters & Caps</a></li>
												<li><a class="list" href="products.html">Night Wear</a></li>
												<li><a class="list" href="products.html">Quilts & Wraps</a></li>
											</ul>
										</div>
										<div class="col-sm-3 menu-grids">
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.html">Blankets</a></li>
												<li><a class="list" href="products.html">Gloves & Mittens</a></li>
												<h4>Shop by Age</h4>
												<li><a class="list" href="products.html">New Born (0 - 5 M)</a></li>
												<li><a class="list" href="products.html">5 - 10 Months</a></li>
												<li><a class="list" href="products.html">10 - 15 Months</a></li>
												<li><a class="list" href="products.html">15 Months Above</a></li>
											</ul>
										</div>
										<div class="col-sm-3 menu-grids">
											<ul class="multi-column-dropdown">
												<li><h6><a class="list" href="products.html">Feeding & Nursing</a></h6></li>
												<h4>Baby Gear</h4>
												<li><a class="list" href="products.html">Baby Walkers</a></li>
												<li><a class="list" href="products.html">Strollers</a></li>
												<li><a class="list" href="products.html">Prams & Toys</a></li>
												<li><a class="list" href="products.html">Cribs & Cradles</a></li>
												<li><a class="list" href="products.html">Booster Seats</a></li>
											</ul>
										</div>
										<div class="clearfix"> </div>
									</div>
									
								</ul>
								 -->
</li>
@endforeach
</ul> 
<div class="clearfix"> </div>
<!--//navbar-collapse-->
<header class="cd-main-header">
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