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

    .hidden {
      display: none;
      /* opacity: 0; */
    }
  </style>
</head>
<?php include("include/helpers.php"); ?>
<?php include("include/nav.php"); ?>
<?php include("include/details.php"); ?>
<body>
  <!-- CONTENIDOS -->
  <div class="global-container"><!-- add class 'show-detail' to show detail view -->
    <!-- TOP BAR -->
    <div class="top-bar-container">
      <!-- <button class="js-back">Back</button> -->
    </div>

    <!-- MAIN NAV -->
    <div class="main-nav-container" data-component="MainNav">
      <div class="grid-container">
        <?php buildNavGrid(); ?>
      </div>
    </div>
    
  <!-- 
    notas seba

      El subtítulo de ahí es para mí lo que debería ser como mínimo el texto. Tal vez más grande incluso un punto

      El chiquito lo dejaría para copirights abajo de fotos pero es incómodo de leer

      No tiene antialiasing

      





  -->

    <!-- MAiN CONTENT -->
    <div class="detail-container swipe-scroller" id="SmoothScroll" data-component="SwipeScroller">
      <div class="track">
        <?php buildDetails(); ?>
      </div>
    </div>

    <!-- BOTTOM BAR -->
    <div class="bottom-bar-container">
      <button class="js-back">Back</button>
    </div>

  </div><!-- .global-container -->

  <!-- DEBUG -->
  <!-- <div class="debug-info-container js-debug"></div> -->

</body>
<!-- Componentes JS -->
<script type="text/javascript" src="./assets/js/swipe-scroller.js"></script>
<script type="text/javascript" src="./assets/js/main-nav.js"></script>


<!-- Main App -->
<script type="text/javascript" src="./assets/js/app.js"></script>


</html>