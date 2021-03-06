<?php 
   session_start();
   require_once("./settings.php");
if (isset($_POST['search'])){
     $_SESSION['queryString'] = $_POST['search'];
     //echo $_SESSION['queryString'];
     header('Location: results.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>EATIT - Home</title>
	<!--fonts-->
	    <link href='https://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
		
	<!--//fonts-->
			<link href="css/bootstrap.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
	   <meta name="description" content="Eatit - food sharing platform for Champaign, Illinois">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->	
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- cart -->
		<script src="js/simpleCart.min.js"> </script>
	<!-- cart -->
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
			
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});

				var User = "<?php echo $_SESSION['name']; ?>";
				if (!User){
					var content1 = "<ul><li id=\"login_link\"><a href=\"login.php\">Login</a></li>";
					    content1 += " | ";
						content1 += "<li id=\"register_link\"><a href=\"register.php\">Register</a></li></ul>";
					$(".login-section").html(content1);
				}
				else {
					   var content2 = "<ul><li id=\"logout_link\">";
					    content2 += "<form action=\"logout.php\" method=\"post\">";
						content2 += "<input type=\"submit\" name=\"submit\" value=\"Sign Out\" id=\"logoutbutton\" />";
						content2　+= " | ";
						content2 += "<a href=\"user.php\">My Homepage</a>";
						content2 += "</form></li></ul>";
					$(".login-section").html(content2);

				}

/*
				$("#logout_link").click(function(){
					sessionStorage.clear();
				});
*/
			});
		</script>
	<!-- start-smoth-scrolling -->

</head>
<body>
<!-- header -->
<div class="header">
	<div class="container">
		<div class="top-header">
				<div class="header-left">
					<!--<p>Place your order and get 20% off on each price</p>-->
				</div>
				<div class="login-section">
	
				</div>
				<!-- start search-->
				    <div class="search-box">
					    <div id="sb-search" class="sb-search">
							<form action="index.php" method="post">
								<input class="sb-search-input" placeholder="Enter your search item..." type="search" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
				    </div>
					<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
				<!-- //search-scripts -->
				<div class="header-right">
					<!--
						<div class="cart box_1">
							<a href="checkout.html">
								<h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
							</a>	
						 <p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p> 
							<div class="clearfix"> </div>
						</div>
					-->
				</div>
				<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
				<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- //header -->
<!-- banner -->
<div class="banner-slider">
	<div class="banner-pos">
		<!-- responsiveslides -->
							<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
								</script>
		<!-- responsiveslides -->
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner one">
						<div class="container">
							<div class="navigation text-center">
								<span class="menu"><img src="images/menu.png" alt=""/></span>
									<ul class="nav1">
										<li><a class="active" href="index.php">HOME</a></li>
										<li><a href="#">ABOUT</a></li>
										<li><a href="#">MENU</a></li>
										<li><a href="#">GALLERY</a></li>
										<li><a href="#">TODAY'S SPECIAL</a>
										<li><a href="#">CONTACT</a></li>
										<div class="clearfix"></div>
									</ul>
							</div>
							<!-- point burst circle -->
							<div class="logo">
								<a href="index.php">
									<div class="burst-36 ">
									   <div>
											<div><span><img src="images/logo.png" alt=""/></span></div>
									   </div>
									</div>
										<div align="center">
									<h1 class="eatit-title">EATIT</h1>
								</div>
								</a>
							</div>
							<!-- //point burst circle -->
							
							<div class="banner-info text-center">
								<p>Tasty, Delicious & Safe Always!</p>
								<div class="order"><a href="login.php">ORDER NOW</a></div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner two">
						<div class="container">
							<div class="navigation text-center">
								<span class="menu"><img src="images/menu.png" alt=""/></span>
									<ul class="nav1">
										<li><a href="index.php">HOME</a></li>
										<li><a href="">ABOUT</a></li>
										<li><a href="">MENU</a></li>
										<li><a href="">GALLERY</a></li>
										<li><a href="">TODAY'S SPECIAL</a>
										<li><a href="contact.php">CONTACT</a></li>
										<div class="clearfix"></div>
									</ul>
									<!-- script for menu -->
										<script> 
											$( "span.menu" ).click(function() {
											$( "ul.nav1" ).slideToggle( 300, function() {
											 // Animation complete.
											});
											});
										</script>
									<!-- //script for menu -->
							</div>
							<!-- point burst circle -->
							<div class="logo">
								<a href="index.php">
									<div class="burst-36 ">
									   <div>
											<div><span><img src="images/logo.png" alt=""/></span></div>
									   </div>
									</div>
										<div align="center">
									<h1 class="eatit-title">EATIT</h1>
								</div>
								</a>
							</div>
							<!-- //point burst circle -->
							
							<div class="banner-info text-center">
								<p>Tasty, Delicious & Safe Always!</p>
								<div class="order"><a href="#">ORDER NOW</a></div>
							</div>
						</div>
					</div>
				</li>				
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
	<!-- banner-bottom -->
		<div class="banner-bottom">
			<div class="container">
				<div class="bottom-grids">
					<div class="col-md-4 bottom-grid text-center">	
						<div class="btm-clr">
							<figure class="icon">
								<img src="images/k1.png" alt="" />
						  </figure>
							<h3>New Dishes</h3>
							<p> Stay tuned! New Dishes added every week.</p>
						</div>
					</div>
					<div class="col-md-4 bottom-grid btm-gre text-center">
						<div class="btm-clr">
							<figure class="icon">
								<img src="images/k2.png" alt="" />
						  </figure>
							<h3>Freshness</h3>
							<p>Fresh food with fast delivery.</p>
						</div>
					</div>
					<div class="col-md-4 bottom-grid text-center">
						<div class="btm-clr">
							<figure class="icon">
								<img src="images/k3.png" alt="" />
						  </figure>
							<h3>Diversity</h3>
							<p> Tastes from all over the world brought to your table. </p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!-- //banner-bottom -->
</div>
<!-- //banner -->
<div class="welcome">
	<div class="container">
		<div class="wel-info">
			<h3>WELCOME</h3>
			<div class="strip-line"></div>
			<p>Discover and order delicious home-made food. </p>
		</div>
		<div class="welcome-grids">
			<div class="col-md-4 welcome-grid-img">
				<img src="images/pic10.jpg" alt=""/>
				<div class="wel-pos">
					<h4>FRUIT SALAD</h4>
				</div>
			</div>
			<div class="col-md-4 welcome-grid">
				<div class="welcome-gd second">
					<h4>Fruit Salad </h4>
					<p> Common ingredients used in fruit salads include strawberries, pineapple, honeydew, watermelon, grapes, banana, and kiwifruit. Yummy!
					</p>
				</div>
			</div>
			<div class="col-md-4 welcome-grid-img">
				<img src="images/pic11.jpg" alt=""/>
				<div class="wel-pos">
					<h4>CARROT EGG</h4>
				</div>
			</div>
			<div class="col-md-4 welcome-grid">
				<div class="welcome-gd second">
					<h4>Special Prawns </h4>
					<p> Fresh, summery prawn salad. Secretly an updated version of prawn cocktail, but a million times better than that description makes it sound. 
				</div>
			</div>
			<div class="col-md-4 welcome-grid-img">
				<img src="images/pic2.jpg" alt=""/>
				<div class="wel-pos">
					<h4>SPECIAL PRAWNS</h4>
				</div>
			</div>
			<div class="col-md-4 welcome-grid">
				<div class="welcome-gd second">
					<h4>Carrot Egg </h4>
					<p> Egg salad is part of a tradition of salads involving protein mixed with seasonings in the form of herbs, spices, and other foods, and bound with mayonnaise.
					</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //welcome -->
<!-- good -->
<div class="good">
	<div class="container">
		<div class="good-info">
			<h3>FINE DESERTS</h3>
			<div class="strip-line"></div>
		</div>
		<div class="good-grids">
			<div class="col-md-5 good-right">
				<img src="images/cake.jpg" alt=""/>
				<div class="desc">
					<p>DESERT</p>
				</div>
			</div>
			<div class="col-md-7 good-left">
				<h3>GOOD FOOD KEEPS YOU HEALTHY</h3>
				<div class="strip"></div>
				<p>Our moist white crème cake with fresh
								raspberry in whip cream and a whip cream frosting.</p>
				<p>This classic originates from the Hotel Sacher in
					Vienna, Austria. This cake is a chocolate cake with
					a glorious raspberry filling. The cake is then covered in
					chocolate buttercream and topped with raspberry.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="footer-left">
			<p>Copyright &copy; 2016 Eatit</p>
		</div>
		
		<div class="footer-right">
			<ul>
			   <li>Yiwei Zhuang<li>
			   <li>Daocun Yang<li>
			   	<li>Yang Yao<li>
			   <li>Yang Song<li>		
			</ul>
		</div>
	
		<div class="clearfix"></div>
	</div>
</div>

<!-- //footer -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>