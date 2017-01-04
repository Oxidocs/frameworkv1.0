<?php
include('../controllers/all_controllers.php');
	$controller = new Controllers();
	echo json_encode(($controller->getContentNoticia('', 4, '', '', '1', 'fecha_creacion','desc',false, false, false, '1')));
?>
