<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="sitio, institucional, ucn, universidad catolica norte, coquimbo" />
	<meta name="description" content="El Observatorio Laboral de Coquimbo (OLC) se enmarca en un proyecto nacional de instalación de observatorios laborales en todas las regiones del país." />
	<title>Observatorio Laboral Coquimbo - Quienes Somos</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <link href="css/modern-business.css" rel="stylesheet">
  <link rel="stylesheet" href="css/lightbox.min.css">

	<!-- fuentes -->

	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">

	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->

	<link rel="apple-touch-icon" href="favicon.png">
	<link rel="icon" type="image/png" href="favicon.png" />
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8&appId=396093144062831";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<script>
		window.twttr = (function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0],
		    t = window.twttr || {};
		  if (d.getElementById(id)) return t;
		  js = d.createElement(s);
		  js.id = id;
		  js.src = "https://platform.twitter.com/widgets.js";
		  fjs.parentNode.insertBefore(js, fjs);
		  t._e = [];
		  t.ready = function(f) {
		    t._e.push(f);
		  };
	  	return t;
		}(document, "script", "twitter-wjs"));
	</script>

	<?php
	// NAV TOP
	include 'include/topnav.php';
	// SLIDER
	include 'include/slider-home.php';
	// NAV PRINCIPAL
	include 'include/nav2.php';
	?>
	<!-- contenidos -->
	<section>
		<div class="container">
			<div class="row fondocontenidos-bienvenido">
				<div class="col-xs-12 col-md-8">
					<?php
						include 'include/bienvenido.php';
						include 'include/mision.php';
					?>
				</div>
				<div class="col-xs-12 col-md-4">
					<?php
						include 'include/mapa.php';
						include 'include/banners.php';
					 ?>

				</div>
			</div>
		</div>
	</section>
	<?php
	include 'include/footer.php';
	?>
	<script src="js/main.js"></script>
	<!-- Script to Activate the Carousel -->
	<script>
		$('#myCarousel').carousel({
			interval: 4000 //changes the speed
		})
	</script>

	<script src="js/lightbox.min.js"></script>

</body>

</html>
