<?php
    require_once('cUrl.php');

    $id = 3;

    $domain = $_SERVER['HTTP_HOST'];
    $url = 'http://'.$domain.'/admin/routes/single_vision.php?id='.$id;
    $json = obtener($url);
    $vision = json_decode($json);
    setlocale(LC_TIME, 'es_ES.UTF-8');

?>


      <div class="">
        <h2 >Nosotros</h2>

        <p><?php print_r($vision[0]->descripcion)?></p>

      </div>
