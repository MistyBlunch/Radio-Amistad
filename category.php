<?php 
  get_header(); 

  $tendenciasSliders = getSliderTendencias();
?>

<section class="blogNews radio">
  <div class="container">
    <div class="row social radioView">
      <div class="col-8">
        <div class="row radioTitle">
          <div class="col d-flex align-items-center">
            <h5 class="title font-weight-bold">LISTA DE NOTICIAS<wbr></h5>
            <div class="bar"></div>
          </div>
        </div>
        <?php while(have_posts()) : the_post(); ?>
          <div class="row">
            <div class="col newsSection">
              <div class="row newsContainer">
                <div class="col">
                    <figure class="figure">
                  <?php the_post_thumbnail(); ?>
                  </figure>
                </div> 
                <div class="col newsDescription">
                  <a href="<?php the_permalink(); ?>">
                    <h5 class="newTitle font-weight-bold"><?php the_title()?></h5>
                  </a>
                  <?php the_excerpt(); ?>
                  <!-- <p class="newText"><?php the_excerpt(); ?></p> -->
                </div>
              </div>
            </div>        
          </div>
        <?php endwhile; ?>
      </div>
      <div class="col sidebar">
        <div class="wppContainer socialItems">
          <h4 class="text-white font-weight-bold m-0">Envía tus saludos</h4>
            <img class="snLgo" src="<?php echo get_template_directory_uri().'/imgs/whatsapp.svg'; ?>">
          <span class="text-white font-weight-bold">995493180</span>
        </div>
        <div class="socialMsj socialItems">
          <h6 class="text-white font-weight-bold m-0">Síguenos en:</h6>
        </div>
        <div class="fb-page" data-href="https://www.facebook.com/radioamistadoficial/" data-tabs="" data-width="263" data-height="" data-small-header="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/radioamistadoficial/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/radioamistadoficial/">Radio Amistad Huaral</a></blockquote></div>
        <div class="sidebarVideo">
          <div id="carouselTrending" class="carousel slide">
              <div class="carousel-inner">

                <?php foreach($tendenciasSliders as $tendenciasSlider) : 
                  ?>
                  <div class="carousel-item <?php echo $tendenciasSlider['current']; ?>">
                    <div class="trendingItem">
                      <img src="<?php echo $tendenciasSlider['image_full'][0]?>" height="230" class="d-block w-100" alt="...">
                    </div>
                    <div class="titleCaption">
                      <a class="text-white" href="<?php echo $tendenciasSlider['url']?>">
                        <h5 class="font-weight-bold text-body"><?php echo $tendenciasSlider['title']; ?></h5>
                      </a>
                    </div>
                  </div>
                <?php endforeach?>

              </div>
              <a class="carousel-control-prev car-controls-icons" href="#carouselTrending" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next car-controls-icons" href="#carouselTrending" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
  get_footer(); 
?>