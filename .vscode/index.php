<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Convergencia</title>
  <link rel="stylesheet" href="/assets/css/normalize.css">
  <link rel="stylesheet" href="/assets/css/fonts.css">
  <link rel="stylesheet" href="/assets/css/typebase.css">
  <link rel="stylesheet" href="/assets/css/swipe-scroller.css">

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
  <div class="global-container">
    <div class="container">
      <!-- NAV -->
       <!-- PROBAR MAÑANA CON UNA IMPLEMENTACION PROPIA -->
      <div class="detail-container swipe-scroller" id="SmoothScroll" data-component="SwipeScroller">
        <div class="track">
          <?php include("content/03/content.html"); ?>
        </div>
      </div>
    
    </div>
  </div>


</body>
<!-- Componentes JS -->
<script type="text/javascript" src="./assets/js/swipe-scroller.js"></script>


<!-- Main App -->
<script type="text/javascript" src="./assets/js/app.js"></script>


</html>