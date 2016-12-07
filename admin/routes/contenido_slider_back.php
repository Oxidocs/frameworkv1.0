<?php
    require_once('../../include/cUrl.php');

	$domain = $_SERVER['HTTP_HOST'];
	$json = obtener('http://'.$domain.'/frameworkv1.0/admin/controllers/slider.php?action=listar');
	$objs = json_decode($json);
?>
