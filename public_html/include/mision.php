<?php

    require_once('cUrl.php');

    $id = 2;

    $domain = $_SERVER['HTTP_HOST'];
    $url = 'http://'.$domain.'/admin/routes/single_mision.php?id='.$id;
    $json = obtener($url);
    $mision = json_decode($json);
    setlocale(LC_TIME, 'es_ES.UTF-8');

?>

<div class="">
    <p class="text-left"><?php print_r($mision[0]->descripcion)?></p>
</div>
