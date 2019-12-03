<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <title>Radio Amistad</title>
  <?php wp_head();?>
</head> 
<body>
  <header class="header radio">
    <div class="container">
      <div class="row d-flex justify-content-between  align-items-center">
        <div class="col-sm-auto d-flex align-items-center justify-content-center">
          <a href="<?php echo get_home_url().'/'; ?>">
            <img class="img-logo" src="<?php echo get_template_directory_uri().'/imgs/radio_amistad.svg'; ?>" alt="radio amistad logo">
          </a>
        </div>
        <div class="col-sm-auto d-flex align-items-center justify-content-center">
          <a href="<?php echo get_home_url().'/radio'; ?>">
            <div class="circle controlsRadio">
              <img class="controlImgRadio" src="<?php echo get_template_directory_uri().'/imgs/playbtn.svg'; ?>">
            </div>
          </a>
          <h6 class="plaRadioTXT font-weight-bold m-0">Escúchanos <br> EN VIVO</h6>
        </div>
        <div class="col-sm-auto d-flex align-items-center dm-none">
          <h6 class="headerContact m-0">Llamanos a nuestra cabina <a href="https://wa.me/512461117"><span class="t-green">+51 2461117</span></a></h6>
        </div>
        <div class="sm-container col-sm-auto d-flex align-items-center dm-none justify-content-center">
          <a href="https://www.facebook.com/radioamistadoficial/" target="_blank" rel="noopener noreferrer">
            <div class="circle sn fb">
              <img class="snLgo" src="<?php echo get_template_directory_uri().'/imgs/facebook-logo.svg';?>">
            </div>
          </a>
          <a href="https://twitter.com/rad_amistad" target="_blank" rel="noopener noreferrer">
            <div class="circle sn tt">
              <img class="snLgo" src="<?php echo get_template_directory_uri().'/imgs/twitter.svg'; ?>">
            </div>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="circle sn yt">
              <img class="snLgo" src="<?php echo get_template_directory_uri().'/imgs/youtube-logo.svg'; ?>">
            </div>
          </a>
        </div>
      </div>
    </div>
  </header>
  <section class="navbar radio p-0">
    <div class="container">
      <!-- <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="rounded-0 font-weight-bold flex-sm-fill text-sm-center navRadio nav-link active" href="/wordpress/">HOME</a>
        <a class="rounded-0 font-weight-bold flex-sm-fill text-sm-center navRadio nav-link" href="#">NOTICIAS</a>
      </nav> -->
      <nav class="navbar navbar-expand-md navbar-light bg-faded radioNav">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu([
          'menu'            => 'top',
          'theme_location'  => 'top',
          'container'       => 'div',
          'container_id'    => 'bs4navbar',
          'container_class' => 'collapse navbar-collapse',
          'menu_id'         => false,
          'menu_class'      => 'navbar-nav mr-auto',
          'depth'           => 2,
          'fallback_cb'     => 'bs4navwalker::fallback',
          'walker'          => new bs4navwalker()
        ]);
        ?>
      </nav>
    </div>
  </section>