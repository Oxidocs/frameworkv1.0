<?php
if (isset($_GET['pagina']) && is_numeric($_GET['pagina'])) {
 	$domain = $_SERVER['HTTP_HOST'];
 	if($_GET['pagina'] <= 0)
 	{
 		header('Location: ./');
 	}

 }
 else
 {
 	header('Location: ./');
 }
?>
<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="sitio, institucional, ucn, observatorio laboral, coquimbo" />
	<meta name="description" content="" />

	<!-- <base href="<?php //echo 'http://'.$domain; ?>" /> -->

	<title>Observatorio Laboral Coquimbo, Chile | Noticias</title>


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
	<?php
  // NAV TOP
	include 'include/topnav.php';
	// SLIDER
	include 'include/slider-home.php';
	include 'include/nav2.php';
	?>
  <section>
		<div class="container">
			<div class="row fondocontenidos-bienvenido">
				<div class="col-xs-12 col-md-8">
					<?php
						include 'include/paginador_noticias.php';
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


<?php include 'include/footer.php'; ?>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

  <script src="js/main.js"></script>



</body>

</html>
