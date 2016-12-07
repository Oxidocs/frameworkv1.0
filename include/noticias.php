<?php
  require_once('cUrl.php');
  $domain = $_SERVER['HTTP_HOST'];
  $url = 'http://'.$domain.'/frameworkv1.0/admin/routes/ultima_noticia.php';
  $json = obtener($url);
  $objs = json_decode($json);
  setlocale(LC_TIME, 'es_ES.UTF-8');
  if(!$objs == null){
    $i=0;
    foreach ($objs as $obj)
    {
?>
<div class="tarjeta-noticias">
  <div class="tarjeta-noticias-imagen">
    <a href="single_noticias/<?php echo $obj->id; ?>">
      <div style="height: 300px;width: 100%;border: 2px solid white;background-repeat: no-repeat;background-size: cover;background-position: center;background-image: url(img/galeria/noticias/<?php echo $obj->id.'/'.$obj->portada_contenido;?>);">
      </div>
    </a>
  </div>
  <div class="row" style="padding:25px;">
    <div class="col-lg-6">
      <h4><a href="single_noticias/<?php echo $obj->id; ?>"><?php echo $obj->titulo; ?></a></h4>
    </div>
    <div class="col-lg-6">
      <span class="tarjeta-noticias-span">
        <p class="fecha"><i class="fa fa-clock-o"></i>Publicado el <?php  $date = date_create($obj->fecha_creacion);
        $dia = date_format($date, 'd');
        $mes = date_format($date, 'm');
        $anio = date_format($date, 'Y');
        $miFecha = gmmktime(12,0,0,$mes,$dia,$anio);
        echo strftime("%A, %d de %B de %Y", $miFecha);?>
        </p>
      </span>
      <p>
        <?php
          $texto =  strip_tags(html_entity_decode($obj->descripcion, ENT_NOQUOTES));
          echo substr($texto, 0, 150)."...";
        ?>
      </p>

    </div>
    <div class="clearfix"></div>

    <div class="smallt">
      <ul class="list-unstyled list-inline list-social-icons">
        <li style="vertical-align: super;">
          <div class="fb-like" data-href="<?php echo $domain.'/frameworkv1/single_noticias/'.$obj->id;?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
        </li>
        <li>
          <a href="https://twitter.com/share" class="twitter-share-button" data-via="" data-hashtags="Coquimbo" data-related="Obsrvatorio Laboral" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </li>
      </ul>
    </div>
  </div>
</div>
<?php
    }
  }
  ?>
