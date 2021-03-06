<?php
	require_once('phpFunctions/connect.php');
?>
<!DOCTYPE HTML>

	
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GEROS-CITY</title>
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
	<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
	
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
	<!--	fontawesome-->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="#">Geros-city <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a class = "rus" href="menu.php">Модельный ряд</a></li>
						<li>
							<a class = "rus" href="services.html">Услуги</a>
						</li>
						<li><a href="#gtco-footer" class = "rus scrollDown" href="contact.html">Контакты</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md col-md-offset-0 text-center">
					

					<div class="row row-mt-15em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							
							<h1 class="cursive-font">Always on big wheels!</h1>
							<div class="row row-mt-15em">
						
					</div>	
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
					<h2 class="cursive-font primary-color rus">Популярные модели</h2>
				</div>
			</div>
			<div class="row">
				<?php
					$query = "SELECT NameProd, LinkImg, Description, Price, Popular FROM products ORDER BY Popular DESC ";
					$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
					if($result) {
						$rows = mysqli_num_rows($result); // количество полученных строк
						for ($i = 0 ; $i < $rows ; ++$i) {
						$row = mysqli_fetch_row($result);
				?>
				<div class="col-lg-4 col-md-4 col-sm-6 products">
				  
					<div class="fh5co-card-item">
					<a href="<?php echo $row[1] ?>" class=" image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="<?php echo $row[1] ?>" alt="Image" class="img-responsive">
						</figure>
                        </a>
						<div class="fh5co-text">
							<h2><?php echo $row[0] ?></h2>
							<div class="desc">
							<p><?php echo $row[2] ?></p>
							</div>
							<p><span class="price cursive-font"><?php echo $row[3] ?></span><i class="icon-shopping-basket basket-icon"></i></p>
						</div>
					</div>
				</div>
				<?php
					if($i == 2) {
					break;
					}
						}
					}
				?>
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font rus">Наши Услуги</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-truck"></i>
						</span>
						<h3 class = "rus">Доставка</h3>
						<p class = "rus">Доставка в любой район города Новосибирска. Возможность выбора услуги обсуждайте с консультантом.</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-thought"></i>
						</span>
						<h3 class = "rus">Гидроизоляция</h3>
						<p class = "rus">Гидроизоляция вашего транспорта. Возможность выбора услуги обсуждайте с консультантом.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1 class = "rus">«Тот, кто изобрел велосипед, заслуживает благодарности человечества»</h1>
					<p class = "rus">&mdash; Лорд Чарльз Бересфорд</p>
				</div>	
			</div>
		</div>
	</div>



			

		</div>
	 </div> 

	</div>
       	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">

				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3 class = "rus">Контактная информация</h3>
						<ul class="gtco-quick-contact">
						<li class="address"> Улица Золотодолинская 2, корпус 1</li>
<!--			ЗДЕСЬ ВСТАВИТЬ КОНТАКТНЫЙ ТЕЛЕФОН			-->
							<li><a href="#"><i class="icon-phone"></i>+7 (952) 913-25-82</a></li>
<!--			ЗДЕСЬ ВСТАВИТЬ КОНТАКТНУЮ ПОЧТУ				-->
							<li><a href="#"><i class="icon-mail2"></i> sashakotkin@mail.com</a></li> 
						</ul>
					</div>
					<div class="gtco-widget">
<!--			ЗДЕСЬ ССЫЛКИ НА СОЦ СЕТИ		-->
						<h3 class = "rus">Социальные сети</h3>
			        <ul class="gtco-social-icons">
				           <li><a href="https://instagram.com/academ_bike?igshid=1wd1v9ew1rwrt" target="_blank"><i class="icon-instagram"></i></a></li>
				           <li><a href="https://vk.com/academbike" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
				       </ul>
					</div>
				</div>

				</div>

			</div>		
        </footer>
        </div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
<!--  POPUP	-->
	<div class="popup">
	    <div class="popup__inner">
	        <div class="popup__title">Сделать заказ</div>
	        <form id="popupForm" class="popup__form">
		<!-- Hidden Required Fields -->
		<input type="hidden" name="project_name" value="GEROS-CITY.">
		<input type="hidden" name="admin_email" value="fortniteyt2001@mail.ru">
		<input type="hidden" name="form_subject" value="Новая заявка">
		<!-- END Hidden Required Fields -->
	            <div class="popup__product">
	                <input type="text" class="popup__call" name="call" placeholder="Введите название товара" disabled>
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

    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
<!--  POPUP	-->
    <script src="js/popup.js"></script>
<!--  SCROLL  -->
    <script src="js/scroll.js"></script>
	</body>
</html>

