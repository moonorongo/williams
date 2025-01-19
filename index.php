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
          <!--
            <?php // for ($i=0; $i < 40; $i++) { ?>
              <div 
                class="grid-element background-settings back-<?= $i % 10?> js-icon"
                data-icon-number="<?= $i ?>"
              ></div>
            <?php // } ?>
          -->
            
          <?php
            build_navigation();
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
          // build_details();
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

      

  <script src="/assets/js/details.js"></script>

  <script src="/assets/js/actions.js"></script>

  <script>
    // init
    window.scrollTo(0,0)
    // showDetailContainer();
  </script>
</body>
</html>