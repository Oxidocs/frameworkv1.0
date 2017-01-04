
<!-- contenido -->
<article class="single-noticia">
    <div class="container">


        <h2><?php echo $articles[0]->titulo; ?></h2>

          <a href="<?php echo "img/galeria/noticias/".$id."/".$articles[0]->portada_contenido; ?>" data-lightbox="logo" data-title="">
            <img src='<?php echo "img/galeria/noticias/".$id."/".$articles[0]->portada_contenido; ?>' alt="" class="img-responsive center-block">
          </a>
          <p class="fecha"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo 'Publicado el : '.$articles[0]->fecha_creacion; ?></p>

          <div class="row sharing">
            <div class="col-md-4 compartir">
							<small class="comp">COMPARTIR:</small>
							<div class="smallt">
                <ul class="list-unstyled list-inline list-social-icons">
                    <li style="vertical-align: super;">
                        <div class="fb-share-button" data-href="<?php echo $actual_link;?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="<?php echo $actual_link;?>">Compartir</a></div>
                    </li>
                    <li>
                        <a href="https://twitter.com/share" class="twitter-share-button" data-via="periodismo_uls" data-hashtags="userena" data-related="userena" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </li>
                </ul>
              </div>
            </div>
					</div>
          <?php
            if($articles[0]->subtitulo != ""){
          ?>
          <blockquote>
          <h3 class = "text-justify"><?php echo $articles[0]->subtitulo; ?></h3>
          </blockquote>
          <?php
        }
            echo html_entity_decode($articles[0]->descripcion);
            if ($articles[0]->imagenes) { # code...

          ?>

          <div class=" galerianoticia">
            <h3>Imágenes Relacionadas</h3>
          <?php
            foreach ($articles[0]->imagenes as $imagen) {

          ?>
            <div class="col-md-3">
              <a href="img/galeria/noticias/<?php print_r($id.'/'.$imagen->PATH);?>" data-lightbox="logo" data-title="<?php print_r($imagen->TITULO);?>">
              <div class="col-md-3 cover" style="background-image: url(img/galeria/noticias/<?php print_r($id.'/'.$imagen->PATH);?>);">

              </div>
              </a>


            </div>
          <?php
            }
          ?>
          </div>
          <?php
        }
           ?>


    </div>
  </article>
