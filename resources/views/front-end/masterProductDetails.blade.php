<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="{{ asset('/') }}/front-end/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('/') }}/front-end/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//Custom Theme files -->
<!--js-->
<script src="{{ asset('/') }}/front-end/js/jquery-1.11.1.min.js"></script>
<script src="{{ asset('/') }}/front-end/js/modernizr.custom.js"></script>
<!--//js-->
<!--flex slider-->
<script defer src="{{ asset('/') }}/front-end/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="{{ asset('/') }}/front-end/css/flexslider1.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!--flex slider-->
<script src="{{ asset('/') }}/front-end/js/imagezoom.js"></script>
<!--cart-->
<script src="{{ asset('/') }}/front-end/js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<!--animation-effect-->
<link href="{{ asset('/') }}/front-end/css/animate.min.css" rel="stylesheet"> 
<script src="{{ asset('/') }}/front-end/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="{{ asset('/') }}/front-end/js/move-top.js"></script>
<script type="text/javascript" src="{{ asset('/') }}/front-end/js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->

		@include('front-end.includes.header')

	<!--//header-->
	<!--breadcrumbs-->
	@yield('productDetails')
	<!--//single-page-->
	<!--footer-->
@include('front-end.includes.footer')
	<!--//footer-->			
	<!--search jQuery-->
	<script src="{{ asset('/') }}/front-end/js/main.js"></script>
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/') }}/front-end/js/bootstrap.js"></script>
</body>
</html>