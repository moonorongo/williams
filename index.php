<?php 
  include("include/lib/index.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ETEC APP</title>
  <link rel="stylesheet" href="/assets/css/normalize.css">
  <link rel="stylesheet" href="/assets/css/typebase.css">
  <link rel="stylesheet" href="/assets/css/global.css">
  <link rel="stylesheet" href="/assets/css/grid.css">
  <link rel="stylesheet" href="/assets/css/nav.css">
  <link rel="stylesheet" href="/assets/css/detail.css">
</head>
<body class="">
  <!-- ICONS -->
  <div class="global-container icons y-scroll">
    <div class="container">
      <div class="grid">
          <?php
            show_navigation_items();
          ?>
          <!-- extra spacing -->
          <div class="grid-element background-settings"></div>
          <div class="grid-element background-settings"></div>
          <div class="grid-element background-settings"></div>
          <div class="grid-element background-settings"></div>
      </div>

    </div>
  </div>

  <!-- CONTENIDOS -->
  <div class="global-container detail">
    <div class="container">
      <div id="detail-container" class="detail-container y-scroll">
        <?php
          show_details();
        ?>

        <div class="nav-buttons-spacer"></div>
      </div>
      
    </div>
  </div>

  <!-- NAV -->
  <div class="nav-buttons">
    <div class="back-icon"></div>
    <!-- <div class="back-icon"></div>
    <div class="back-icon"></div> -->
  </div>

  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src="/assets/vendor/mobilelikescroller.js"></script>

  <script src="/assets/vendor/gsap/minified/gsap.min.js"></script>
  <script src="/assets/vendor/ScrollTrigger.min.js"></script>

  <script>
    gsap.registerPlugin(ScrollTrigger);
  </script>

  <!-- global vars -->
  <script src="/assets/js/global-vars.js"></script>

  <!-- global functions -->
  <script src="/assets/js/helpers.js"></script>
     

  <!-- Details -->
  <script src="/assets/js/details.js"></script>
  <script src="/assets/js/details-actions.js"></script>

  <script>
    // init
    window.scrollTo(0,0)
    // showDetailContainer();
  </script>
</body>
</html>