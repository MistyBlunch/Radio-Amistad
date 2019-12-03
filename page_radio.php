<?php 
  //Template Name: Radio
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        <div class="sm-container col-sm-auto d-flex align-items-center justify-content-center">
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
  <section class="radio">
    <div class="container">
      <div class="row radioTitle">
        <div class="col d-flex align-items-center justify-content-between">
          <h5 class="title font-weight-bold">RADIO EN VIVO<wbr></h5>
          <div class="bar"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="radioOnline radio">
    <div class="container">
      <div class="row social">
        <div class="col-8 d-flex align-items-center flex-column">
        <h5 class="radioTextInfo font-weight-bold text-center">
          Haz click para escuchar.
        </h5>
          <div id="radioPlayer" class="inRadio d-flex align-items-center">
            <div class="circle controlsRadio" onclick="playpauseRadio()">
              <img class="controlImgRadio" id="controlImgRadio" src="<?php echo get_template_directory_uri().'/imgs/playbtn.svg'; ?>">
            </div>
            <div class="d-flex flex-column position-relative">
              <h6 class="plaRadioTXT inRadio font-weight-bold m-0">Escúchanos <br>EN VIVO</h6>
              <input type="range" id="volume" min="0" max="100" value="50">
              <div id="volumenRange"></div>
            </div>
          </div>
          <div class="fb-comments" data-href="https://www.facebook.com/gracenikhole/posts/2428486357470439?__xts__[0]=68.ARByhPz1iuW0L_N4Pfo8BRg8wLpmCAcvnYAFo-ayldLq6t4XTQAtVh6FspbDOcj26pjOrelxLZPs_h-PE4rtkYCyiff8adYO65dshuwGNmnt88HmHrU_BsFWnFMWA14-YpDTdpuGwyKc3fwx0BpxTEI2hNx4r07Z_OT6V0xRmJ69qBN-Awt_H6w4-fkXlc2NNm9NZaJTqCcLliE-Q7oJbft--SGaIPpfJXLZs1NzxaVvfhhPPjy9XcWjImy1Rjt5GkH_YF27y2tTiLMbSSvEsZNHiiepSKN-eCVsDrrlUMKBctlwQaZMjaTTjaEotJr-YNotK57BWdB0ImeYlOYWV6Jj3-4&amp;__tn__=-R" data-width="" data-numposts="5"></div>
        </div>
        <div class="col sidebar d-flex flex-column align-items-center">
          <div class="wppContainer socialItems">
            <h4 class="text-white font-weight-bold m-0">Envía tus saludos</h4>
            <img class="snLgo" src="<?php echo get_template_directory_uri().'/imgs/whatsapp.svg'; ?>">
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
  <?php 
    get_footer(); 
  ?>