<?php
	require_once('phpFunctions/connect.php');
?>
<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Savory &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">



	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.php">Geros-city <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="active"><a href="menu.php">Model range</a></li>
						<li>
							<a href="services.html">Services</a>
<!--
							<ul class="dropdown">
								<li><a href="#">Food Catering</a></li>
								<li><a href="#">Wedding Celebration</a></li>
								<li><a href="#">Birthday's Celebration</a></li>
							</ul>
-->
						</li>
						<li><a href="contact.html">Contact</a></li>
						<li class="btn-cta"><a href="#"><span>Reservation</span></a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					

					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							
							<h1 class="cursive-font">See all our models!</h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

	
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">All models</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<h3 class = "cursive-font primary-color">Самокаты</h3>
				<?php
					$query = "SELECT NameProd, LinkImg, Description, Price FROM products WHERE Category = 'Самокат' ";
					$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
					if($result) {
						$rows = mysqli_num_rows($result); // количество полученных строк
						for ($i = 0 ; $i < $rows ; ++$i) {
						$row = mysqli_fetch_row($result);
				?>
				<div class="col-lg-4 col-md-4 col-sm-6 products">
					<a href="<?php echo $row[1] ?>" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="<?php echo $row[1] ?>" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><?php echo $row[0] ?></h2>
							<p><?php echo $row[2] ?></p>
							<p><span class="price cursive-font"><?php echo $row[3] ?></span></p>
						</div>
					</a>
				</div>
				<?php
						}
					}
				?>
			</div>
			<div class="row">
				<h3 class = "cursive-font primary-color">Велосипеды</h3>
				<?php
					$query = "SELECT NameProd, LinkImg, Description, Price FROM products WHERE Category = 'Велосипед' ";
					$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
					if($result) {
						$rows = mysqli_num_rows($result); // количество полученных строк
						for ($i = 0 ; $i < $rows ; ++$i) {
						$row = mysqli_fetch_row($result);
				?>
				<div class="col-lg-4 col-md-4 col-sm-6 products">
					<a href="<?php echo $row[1] ?>" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="<?php echo $row[1] ?>" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><?php echo $row[0] ?></h2>
							<p><?php echo $row[2] ?></p>
							<p><span class="price cursive-font"><?php echo $row[3] ?></span></p>
						</div>
					</a>
				</div>
				<?php
						}
					}
				?>
			</div>
			<div class="row">
				<h3 class = "cursive-font primary-color">Гироскутеры</h3>
				<?php
					$query = "SELECT NameProd, LinkImg, Description, Price FROM products WHERE Category = 'Гироскутер' ";
					$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
					if($result) {
						$rows = mysqli_num_rows($result); // количество полученных строк
						for ($i = 0 ; $i < $rows ; ++$i) {
						$row = mysqli_fetch_row($result);
				?>
				<div class="col-lg-4 col-md-4 col-sm-6 products">
					<a href="<?php echo $row[1] ?>" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="<?php echo $row[1] ?>" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><?php echo $row[0] ?></h2>
							<p><?php echo $row[2] ?></p>
							<p><span class="price cursive-font"><?php echo $row[3] ?></span></p>
						</div>
					</a>
				</div>
				<?php
						}
					}
				?>

			</div>
		</div>
	</div>

	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>&ldquo; Their high quality of service makes me back over and over again!&rdquo;</h1>
					<p>&mdash; John Doe, CEO of XYZ Co.</p>
				</div>	
			</div>
		</div>
	</div>

	
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							
						
					
				</div>
				</form>
			</div>
        </div>
		</div>
			<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">

				

				
				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +7 953 880 90 70</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@GetTemplates.co</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Get Social</h3>
						<ul class="gtco-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</div>
				</div>

				
					
				
				</div>

			</div>

			
</footer>
<!--	</div>-->
   

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<!--  POPUP	-->
	<div class="popup">
	    <div class="popup__inner">
	        <div class="popup__title">Сделать заказ</div>
	        <form action="#" id="popupForm" class="popup__form">
<!--
            <select name="category" id="popupCategory" class="popup__category">
                <option value="Все" class="popup__option">Все</option>
                <option value="Велосипед" class="popup__option">Велосипеды</option>
                <option value="Самокат" class="popup__option">Самокаты</option>
                <option value="Гироскутер" class="popup__option">Гироскутеры</option>
            </select>
-->
	            <div class="popup__product">
	                <input type="text" class="popup__call" name="call" placeholder="Введите название товара">
	                <input type="text" class="popup__count" name="count" placeholder="Введите количество товара">
	            </div>
	            <input type="text" class="popup__name" name="name" placeholder="Ваше имя">
	            <input type="text" class="popup__tel" name="tel" placeholder = "Ваш номер телефона">
	            <input type="submit" class="popup__submit" name="submit" value="Заказать">
	        </form>
	    </div>
	</div>
	<div class="popup__bg"></div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>
	<!--  POPUP	-->
    <script src="js/popup.js"></script>

	</body>
</html>

