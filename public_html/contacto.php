<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="sitio, institucional, userena, uls, periodismo" />
	<meta name="description" content="Sitio de la carrera de Periodismo de la Universidad de La Serena" />

  <title>Contacto Observatorio Laboral Coquimbo</title>
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
  	// NAV PRINCIPAL
  	include 'include/nav2.php';
    ?>
    <section>
  		<div class="container">
  			<div class="row fondocontenidos-bienvenido">
  				<div class="col-xs-12 col-md-8">
            <h3>Contáctate con nosotros</h3>
  				  <h4 class="envianos">Envianos un email a <a href="mailto:contacto@observatoriocoquimbo.cl">contacto@observatoriocoquimbo.cl</a> o completa el siguiente formulario:</h4>
            <form method="POST" class="formulario" name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Nombre y Apellido:</label>
                        <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Ingresa tu nombre.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Dirección de correo eléctronico:</label>
                        <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Ingresa tu mail.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Asunto:</label>
                        <input type="text" class="form-control" id="asunto" name="asunto">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Mensaje:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Ingresa tu mensaje" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="emailbtn btn btn-primary">Enviar</button>
            </form>
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
    <!-- Page Content -->
    <?php include 'include/footer.php'; ?>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/main.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
