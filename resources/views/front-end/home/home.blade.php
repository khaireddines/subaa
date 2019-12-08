@extends('front-end.master')
@section('title')
	Home
@endsection
@section('body')

	<!--banner-->
	<div class="banner">
		<div class="container">
			<div class="banner-text">			
				<div class="col-sm-5 banner-left wow fadeInLeft animated" data-wow-delay=".5s">			
					<h2>On Entire Fashion range</h2>
					<h3>Coming Soon </h3>
					<h4>Our New Designs</h4>
					<div class="count main-row">
						<ul id="example">
							<li><span class="hours">00</span><p class="hours_text">Hours</p></li>
							<li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
							<li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
						</ul>
							<div class="clearfix"> </div>
							<script type="text/javascript" src="{{ asset('/') }}/front-end/js/jquery.countdown.min.js"></script>
							<script type="text/javascript">
								$('#example').countdown({
									date: '01/01/2020 17:00:00',
									offset: +6,
									day: 'Day',
									days: 'Days'
								}, function () {
									alert('Done!');
								});
							</script>
					</div>

				</div>
		
				<div class="col-sm-7 banner-right wow fadeInRight animated" data-wow-delay=".5s">
							
					<section class="slider grid">
						<div class="flexslider">
							
							<ul class="slides">
								@foreach($newSliders as $newSlider)
								<li>
									<h4>-30%</h4>
									<img src="{{ asset($newSlider->slider_image) }}" alt="">
								</li>
								@endforeach
							</ul>
					
						</div>
					</section>
					<!--FlexSlider-->
					<script defer src="{{ asset('/') }}/front-end/js/jquery.flexslider.js"></script>
					<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "pagination",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					</script>
					<!--End-slider-script-->
				
				</div>
			
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>			
	<!--//banner-->
	<!--new-->
	<div class="new">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">New <span>Arrivals</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
			</div>
			<div class="new-info">
				@foreach($newProducts as $newProduct)
				<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
					<div class="new-top">
						<a href="single.html"><img src="{{ asset($newProduct->product_image) }}" class="img-responsive" alt=""/></a>
						<div class="new-text">
							<ul>
								<li><a class="item_add" href=""> Add to cart</a></li>
								<li><a href="{{ route('product-details',['id'=>$newProduct->id, 'name'=>$newProduct->product_name])}}">Quick View </a></li>
								<li><a href="products.html">Show Details </a></li>
							</ul>
						</div>
					</div>
					<div class="new-bottom">
						<h5><a class="name" href="single.html">{{ ($newProduct->product_name) }}</a></h5>
						<div class="rating">
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span class="on">☆</span>
							<span>☆</span>
						</div>	
						<div class="ofr">
							<p class="pric1"><del>{{($newProduct->product_price)}}</del></p>
							<p><span class="item_price">{{($newProduct->product_price)}}</span></p>
						</div>
					</div>
				</div>
			@endforeach
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>		
	<!--//new-->
	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Popular<span> Products</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur </p>
			</div>
			<div class="gallery-info">
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".5s">
					<a href="products.html"><img src="{{ asset('/') }}/front-end/images/g1.jpg" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Baby Girls' Dress </a></h5>
						<p><span class="item_price">100$</span></p>
						<h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 gallery-grid gallery-grid1 wow flipInY animated" data-wow-delay=".7s">
					<a href="products.html"><img src="{{ asset('/') }}/front-end/images/g2.jpg" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Pokemon Onesies</a></h5>
						<p><span class="item_price">79$</span></p>
						<h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 gallery-grid gallery-grid2 wow flipInY animated" data-wow-delay=".9s">
					<a href="products.html"><img src="{{ asset('/') }}/front-end/images/g3.jpg" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Doctor Play Set</a></h5>
						<p><span class="item_price">30$</span></p>
						<h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay="1.1s">
					<a href="products.html"><img src="{{ asset('/') }}/front-end/images/g4.jpg" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Cap & Gloves Set</a></h5>
						<p><span class="item_price">15$</span></p>
						<h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay=".5s">
					<a href="products.html"><img src="{{ asset('/') }}/front-end/images/g5.jpg" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Full Sleeves Romper</a></h5>
						<p><span class="item_price">60$</span></p>
						<h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 gallery-grid gallery-grid1 wow flipInY animated" data-wow-delay=".7s">
					<a href="products.html"><img src="{{ asset('/') }}/front-end/images/g6.jpg" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Party Wear Frock</a></h5>
						<p><span class="item_price">80$</span></p>
						<h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 gallery-grid gallery-grid2 wow flipInY animated" data-wow-delay=".9s">
					<a href="products.html"><img src="{{ asset('/') }}/front-end/images/g7.jpg" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Bear Diaper Bag</a></h5>
						<p><span class="item_price">110$</span></p>
						<h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 gallery-grid wow flipInY animated" data-wow-delay="1.1s">
					<a href="products.html"><img src="{{ asset('/') }}/front-end/images/g8.jpg" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.html">Battery Police Bike</a></h5>
						<p><span class="item_price">300$</span></p>
						<h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//gallery-->
	<!--trend-->
	<div class="trend wow zoomIn animated" data-wow-delay=".5s">
		<div class="container">
			<div class="trend-info">
				<section class="slider grid">
					<div class="flexslider trend-slider">
						<ul class="slides">
							<li>
								<div class="col-md-5 trend-left">
									<img src="{{ asset('/') }}/front-end/images/t1.png" alt=""/>
								</div>
								<div class="col-md-7 trend-right">
									<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
									<h5>Flat 20% OFF</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="col-md-5 trend-left">
									<img src="{{ asset('/') }}/front-end/images/t2.png" alt=""/>
								</div>
								<div class="col-md-7 trend-right">
									<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
									<h5>Flat 20% OFF</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="col-md-5 trend-left">
									<img src="{{ asset('/') }}/front-end/images/t3.png" alt=""/>
								</div>
								<div class="col-md-7 trend-right">
									<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
									<h5>Flat 20% OFF</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="col-md-5 trend-left">
									<img src="{{ asset('/') }}/front-end/images/t4.png" alt=""/>
								</div>
								<div class="col-md-7 trend-right">
									<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
									<h5>Flat 20% OFF</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus, justo ac volutpat vestibulum, dolor massa pharetra nunc, nec facilisis lectus nulla a tortor. Duis ultrices nunc a nisi malesuada suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam eu bibendum felis. Sed viverra dapibus tincidunt.</p>
								</div>
								<div class="clearfix"></div>
							</li>
						</ul>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!--//trend-->
@endsection