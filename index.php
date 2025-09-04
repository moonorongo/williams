<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Convergencia</title>
  <link rel="stylesheet" href="/assets/css/vars.css">
  <link rel="stylesheet" href="/assets/css/normalize.css">
  <link rel="stylesheet" href="/assets/css/fonts.css">
  <link rel="stylesheet" href="/assets/css/typebase.css">
  <link rel="stylesheet" href="/assets/css/swipe-scroller.css">
  <link rel="stylesheet" href="/assets/css/containers.css">
  <link rel="stylesheet" href="/assets/css/nav-grid.css">
  

  <style>
    img {
      max-width: 100%;
      height: auto;
    }

    html {
      overflow : hidden;
    }
  </style>
</head>
<body>
  <!-- CONTENIDOS -->
  <div class="global-container"><!-- add class 'show-detail' to show detail view -->
    <!-- TOP BAR -->
    <div class="top-bar-container">
      top bar contents
    </div>

    <!-- MAIN NAV -->
    <div class="main-nav-container">
      <div class="grid-container">
        
        <div class="grid-row">
          <div class="grid-item">
            <div class="icon-container">
              <img src="./assets/images/icons/icon_camera.svg" alt="Cámara">
            </div>
            <div class="text-container">Cámara</div>
          </div>
        
          <div class="grid-item">
            <div class="icon-container">
              <img src="./assets/images/icons/icon_email.svg" alt="Cámara">
            </div>
            <div class="text-container">Email</div>
          </div>

          <div class="grid-item">
            <div class="icon-container">
              <img src="./assets/images/icons/icon_contact.svg" alt="Cámara">
            </div>
            <div class="text-container">Contactos</div>
          </div>
        </div>

        <div class="grid-row">
          <div class="grid-item">
            <div class="icon-container">
              <img src="./assets/images/icons/icon_calculator.svg" alt="Cámara">
            </div>
            <div class="text-container">Calculadora</div>
          </div>

          <div class="grid-item">
            <div class="icon-container">
              <img src="./assets/images/icons/icon_videogame.svg" alt="Cámara">
            </div>
            <div class="text-container">Juegos</div>
          </div>

          <div class="grid-item">
            <div class="icon-container">
              <img src="./assets/images/icons/icon_map.svg" alt="Cámara">
            </div>
            <div class="text-container">Mapas</div>
          </div>
        </div>

        <div class="grid-row">
          <div class="grid-item">
            <div class="icon-container">
              <img src="./assets/images/icons/icon_music.svg" alt="Cámara">
            </div>
            <div class="text-container">Música</div>
          </div>

          <div class="grid-item">
            <div class="icon-container">
              <img src="./assets/images/icons/icon_phone.svg" alt="Cámara">
            </div>
            <div class="text-container">Teléfono</div>
          </div>

          <div class="grid-item">
            <div class="icon-container">
              <img src="./assets/images/icons/icon_video.svg" alt="Cámara">
            </div>
            <div class="text-container">Videos</div>
          </div>
        </div>

      </div>
    </div>
    
    <!-- MAiN CONTENT -->
    <div class="detail-container swipe-scroller" id="SmoothScroll" data-component="SwipeScroller">
      <div class="track">
        <?php include("content/03/content.html"); ?>
      </div>
    </div>

    <!-- BOTTOM BAR -->
    <div class="bottom-bar-container">
      bottom bar contents
    </div>

  </div><!-- .global-container -->


</body>
<!-- Componentes JS -->
<script type="text/javascript" src="./assets/js/swipe-scroller.js"></script>


<!-- Main App -->
<script type="text/javascript" src="./assets/js/app.js"></script>


</html>