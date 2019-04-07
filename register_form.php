<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Zoo Planet a Animals and Pets category Flat bootstrap Responsive  Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/register_form.css" rel="stylesheet" type="text/css" media="all" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Zoo Planet Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
	<?php
	include "php/connect_dbs.php";
	?>
		<!--header-->
		<div class="header">
			<div class="container">
				<div class="header-top">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div class="navbar-brand">
									<h1><a href="index.html">zooWiki</a></h1>
								</div>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a href="index.php">Domů</a></li>
									<li><a href="about.html">O nás</a></li>
									<li><a href="services.html">Služby</a></li>
									<li class="login"><a href="login_form.php">Přihlásit</a></li>
									<li class="register, active"><a href="register_form.php">Registrovat <span class="sr-only">(current)</span></a></li>
									<!-- <li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="gallery.html">Gallery1</a></li>
										<li><a href="gallery.html">Gallery2</a></li>
										<li><a href="gallery.html">Gallery3</a></li>
									</ul>
										</li>
										<li><a href="codes.html">Codes</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul> -->

							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>

				</div>
			</div>
		</div>

			<!--welcome-->
			<div class="content">
				<div class="wrapper fadeInDown">
  			<div id="formContent">
    	<!-- Tabs Titles -->

    <!-- Login Form -->
    	<form action="php/php.php" method="post" >
				<h2>Registrace</h2>
      	<input type="text" id="name" class="fadeIn second" name="name" placeholder="Jméno">
				<input type="text" id="surname" class="fadeIn second" name="surname" placeholder="Příjmení">

				<input type="text" id="nick" class="fadeIn second" name="nick" placeholder="Přezdívka">
      	<input type="password" id="password" class="fadeIn third" name="password" placeholder="Heslo">
      	<input type="submit" class="fadeIn fourth" name = "submit_register" value="Registrovat">
    	</form>


    <!-- Remind Passowrd -->
    <!-- <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div> -->

  </div>
</div>
</div>
			<!--welcome-->
						<!--feature-->
				<div class="feature">
					<div class="container">
						<h3>Our Features</h3>
						<div class="feature-grids">
								<div class="col-md-4 feature-grid">
										<span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
										<h4>Earum Rerum</h4>
										<p>Masagni dolores eoquie voluptate msequi nesciunt. Nique porro quisquam est qui dolorem ipsumquia dolor sitamet consectet, adipisci unumquam eius.</p>
									</div>
									<div class="col-md-4 feature-grid">
										<span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>
										<h4>Itaque Earum</h4>
										<p>Masagni dolores eoquie voluptate msequi nesciunt. Nique porro quisquam est qui dolorem ipsumquia dolor sitamet consectet, adipisci unumquam eius.</p>
									</div>
									<div class="col-md-4 feature-grid">
										<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
										<h4>Assumenda est</h4>
										<p>Masagni dolores eoquie voluptate msequi nesciunt. Nique porro quisquam est qui dolorem ipsumquia dolor sitamet consectet, adipisci unumquam eius.</p>
									</div>
									<div class="clearfix"></div>
								</div>
					</div>
				</div>
				<!--feature-->
				<!--animals-->
					<div class="animals">
						<div class="container">
							<h3>animals</h3>
							<div class="clients">
								<ul id="flexiselDemo3">
									<li><img src="images/m1.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m2.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m3.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m4.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m5.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m1.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m2.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m3.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m4.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m5.jpg" class="img-responsive" alt=""/></li>
								</ul>
									<script type="text/javascript">
								$(window).load(function() {

								  $("#flexiselDemo3").flexisel({
										visibleItems: 5,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: {
											portrait: {
												changePoint:480,
												visibleItems: 1
											},
											landscape: {
												changePoint:640,
												visibleItems: 2
											},
											tablet: {
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									});
								</script>
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--models-->
			<!--testimonials-->
			<div class="testimonials">
				<div class="container">
					<h3>testimonials</h3>
					<p>Aenean nonummy hendrerit mau phasellu porta. Fusce suscipit varius mi sed. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio morbi. Ut viverra mauris justo, quis auctor nisi. Suspendisse sit amet diam diam, eget volutpat lacus. Vestibulum faucibus scelerisque nisl vitae scelerisque. Sed tristique metus eu…</p>
					<h4><a href="#">John Anderson</a></h4>
				</div>
			</div>
			<!--testimonials-->

						<!--events-->
							<div class="events">
								<div class="container">
									<h3>events</h3>
									<div class="events-grids">
											<div class="col-md-3 event-grid">
												<a href="#" class="mask">
												<img src="images/e1.jpg" class="img-responsive zoom-img" alt=""></a>
											</div>
											<div class="col-md-3 event-grid1">
												<h4>Mauris non magna ul </h4>
												<h5>19-aug-2015</h5>
												<p>Fusce feugiat malesuada odio. Morbi orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</p>
											</div>
											<div class="col-md-3 event-grid">
												<a href="#" class="mask">
												 <img src="images/e2.jpg" class="img-responsive zoom-img" alt=""></a>
											</div>
											<div class="col-md-3 event-grid1">
												<h4>Mauris non magna ul </h4>
												<h5>25-sep-2014</h5>
												<p>Fusce feugiat malesuada odio. Morbi orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</p>
											</div>
										<div class="clearfix"></div>
								</div>
							</div>
							</div>
						<!--events-->
						<!--specials-->
				<div class="specials-section">
					<div class="container">
						<div class="specials-grids">
							<div class="col-md-3 specials1">
								<h3>timings</h3>
									<p>10:30 Am - 10:45 Am Dino Chat</p>
									<p>11:00 Am - 11:15 Am Panda</p>
									<p>11:30 Am - 12:00 PM Farm Chat</p>
									<p>12:00 Pm - 01:00 Pm Feeding</p>
							</div>
							<div class="col-md-3 specials1">
								<h3> details</h3>
								<ul>
									<li><a href="about.html">About Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Terms & Conditions</a></li>
									<li><a href="contact.html">SiteMap</a></li>
								</ul>
							</div>
							<div class="col-md-3 specials1">
								<h3>contact</h3>
								<address>
									<p>The Company Name Inc.</p>
									<p>Glasgow,Le 99 Pr 45.</p>
									<p>Telephone : +1 800 603 6035</p>
									<p>FAX : +1 800 889 9898</p>
									<p>Email : <a href="mailto:example@mail.com">example@mail.com</a></p>
								</address>
							</div>
							<div class="col-md-3 specials1">
								<h3>social</h3>
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">google+</a></li>
									<li><a href="#">vimeo</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<!--footer-->
			<div class="footer-section">
				<div class="container">
					<div class="footer-top">
						<p>&copy; 2015 Zoo Planet . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
					</div>
				</div>
			</div>
</body>
</html>
