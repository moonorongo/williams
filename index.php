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
<?php include("include/helpers.php"); ?>
<?php include("include/nav.php"); ?>
<body>
  <!-- CONTENIDOS -->
  <div class="global-container"><!-- add class 'show-detail' to show detail view -->
    <!-- TOP BAR -->
    <div class="top-bar-container">
      top bar contents
    </div>

    <!-- MAIN NAV -->
    <div class="main-nav-container" data-component="MainNav">
      <div class="grid-container">
        <?php buildNavGrid(); ?>
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
<script type="text/javascript" src="./assets/js/main-nav.js"></script>


<!-- Main App -->
<script type="text/javascript" src="./assets/js/app.js"></script>


</html>