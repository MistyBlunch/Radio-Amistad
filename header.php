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
          <img class="img-logo" src="<?php echo get_template_directory_uri().'/imgs/radio_amistad.svg'; ?>" alt="radio amistad logo">
        </div>
        <div class="col-sm-auto d-flex align-items-center justify-content-center">
          <a href="#">
            <div class="circle controlsRadio">
              <img class="controlImgRadio" src="<?php echo get_template_directory_uri().'/imgs/playbtn.svg'; ?>">
            </div>
          </a>
          <h6 class="plaRadioTXT font-weight-bold m-0">Escúchanos <br> EN VIVO</h6>
        </div>
        <div class="col-sm-auto d-flex align-items-center dm-none">
          <h6 class="headerContact m-0">Llamanos a nuestra cabina <span class="t-green">+51 2461117</span></h6>
        </div>
        <div class="sm-container col-sm-auto d-flex align-items-center dm-none justify-content-center">
          <a href="#" target="_blank" rel="noopener noreferrer">
            <div class="circle sn fb">
              <img class="snLgo" src="<?php echo get_template_directory_uri().'/imgs/facebook-logo.svg';?>">
            </div>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer">
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