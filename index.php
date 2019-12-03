  <?php 
  get_header(); 
  
  $actualSliders = getSliderActual();
  $noticiaSliders = getSliderNoticias();
  $tendenciasSliders = getSliderTendencias();

  ?>
  <section class="newsCarousel radio">
    <div class="container">
      <div id="carouselNewsInfo" class="carousel slide">
        <div class="carousel-inner">
          
          <?php foreach($actualSliders as $actualSlider) : ?>
            <div class="carousel-item <?php echo $actualSlider['current']; ?>">
              <?php if(!empty($actualSlider['image_full'])):?>
                <img src="<?php echo $actualSlider['image_full'][0] ?>" class="d-block w-100" alt="...">
              <?php endif ?>
              <div class="carousel-caption">
                <div class="newsTag">
                  <h6 class="font-weight-bold m-0"><?php echo $actualSlider['category']; ?></h6>
                </div>
                <a class="text-white" href="<?php echo $actualSlider['url']?>">
                  <h5 class="font-weight-bold"><?php echo $actualSlider['title']; ?></h5>
                </a>
                <p class="newsDesc">
                  <?php echo $actualSlider['description']; ?>
                </p>
              </div>
            </div>
          <?php endforeach ?>

        </div>
        <a class="carousel-control-prev car-controls-icons" href="#carouselNewsInfo" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next car-controls-icons" href="#carouselNewsInfo" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <section class="lastNews radio d-flex">
    <div class="container">
      <div class="row">
        <div class="newsHeader col d-flex justify-content-between align-items-center">
          <h4 class="font-weight-bold text-white m-0">LO ÚLTIMO</h4>
          <a href="#"><button class="lastNewsBtn text-white">Ver más noticias</button></a>
        </div>
      </div>
      <?php
        $counter = count($noticiaSliders)/3;
        $stateActive = '';
        $carNotice = [];
        $notice = [];
        $el = [];
        $all = [];

        for($i=0; $i < count($noticiaSliders); $i++) {

          array_push($el, $noticiaSliders[$i]['title'], $noticiaSliders[$i]['image_full'][0], $noticiaSliders[$i]['url']);
          array_push($notice, $el);
          $el = [];
          
          if (count($notice) % 3 == 0) {
            array_push($carNotice, $notice);
            $notice = [];
            array_push($all, $carNotice);
            $carNotice = [];
          }
        }
      ?> 
      <div id="lastNewsCarousel" class="carousel slide">
        <ol class="carousel-indicators">
          <?php for($count=0; $count < $counter; $count++) :?>
            <?php 
            if($count == 0){
              $stateActive = 'active';
            } else {
              $stateActive = '';
            }
            ?>
            <li data-target="#lastNewsCarousel" data-slide-to="<?php echo $count; ?>" class="<?php echo $stateActive; ?>"></li>
          <?php endfor ?>
        </ol>
        
        <div class="carousel-inner">
        
          <?php foreach($all as $key => $item) :
            if($key == 0) {
              $stateActive = 'active';
            } else {
              $stateActive = '';
            }
          ?>
            <div class="carousel-item <?php echo $stateActive; ?>">
              <div class="row newImgs">
                <div class="col">
                  <figure class="figure">
                    <img src="<?php echo $item[0][0][1]; ?>" class="figure-img img-fluid rounded" alt="...">
                    <a class="text-white" href="<?php echo $item[0][0][2];?>">
                      <figcaption class="figure-caption text-body"><?php echo $item[0][0][0]; ?></figcaption>
                    </a>
                  </figure>
                </div>
                <div class="col">
                  <figure class="figure">
                    <img src="<?php echo $item[0][1][1]; ?>" class="figure-img img-fluid rounded" alt="...">
                    <a class="text-white" href="<?php echo $item[0][1][2];?>">
                      <figcaption class="figure-caption text-body"><?php echo $item[0][1][0]; ?></figcaption>
                    </a>
                  </figure>
                </div>
                <div class="col">
                  <figure class="figure">
                    <img src="<?php echo $item[0][2][1]; ?>" class="figure-img img-fluid rounded" alt="...">
                    <a class="text-white" href="<?php echo $item[0][2][2];?>">
                      <figcaption class="figure-caption text-body"><?php echo $item[0][2][0]; ?></figcaption>
                    </a>
                  </figure>
                </div>
              </div>
            </div>
          <?php endforeach ?>

        </div>
      </div>
    </div>
  </section>
  <section class="trendingTopics radio">
    <div class="container">
      <div class="row">
        <div class="col">
          <h5 class="trendingTitle font-weight-bold">
            Tendencias en Youtube
          </h5>
        </div>
      </div>
      <div class="row social">
        <div class="col-8">
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
        <div class="col sidebar">
          <div class="wppContainer socialItems">
            <h4 class="text-white font-weight-bold m-0">Envía tus saludos</h4>
            <img src="<?php echo get_template_directory_uri().'/imgs/whatsapp.svg'; ?>" alt="">
            <span class="text-white font-weight-bold">995493180</span>
          </div>
          <div class="socialMsj socialItems">
            <h6 class="text-white font-weight-bold m-0">Síguenos en:</h6>
          </div>
          <div class="fb-page" data-href="https://www.facebook.com/radioamistadoficial/" data-tabs="" data-width="263" data-height="" data-small-header="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/radioamistadoficial/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/radioamistadoficial/">Radio Amistad Huaral</a></blockquote></div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>