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
      <div class="nav-buttons-spacer"></div>
      <div class="grid">
        <?php for ($i=0; $i < 40; $i++) { ?>
            <div 
              class="grid-element background-settings back-<?= $i % 10?> js-icon"
              data-icon-number="<?= $i ?>"
            >
            <!-- nothing here -->
            </div>
          <?php } ?>
      </div>
      <div class="nav-buttons-spacer"></div>
    </div>
  </div>

  <!-- CONTENIDOS -->
  <div class="global-container detail">
    <div class="container">
      <div id="detail-container" class="detail-container y-scroll">
          <h1>Heading 1</h1>
          <h2>Heading 2</h2>
          <h3>Heading 3</h3>

          <h3>Video</h3>
          <video 
            loop="" playsinline="" preload="auto" 
            src="/assets/videos/sample1.mp4">
          </video>


          <h3>Paragraph</h3>
          <p>
            This is an example of paragraph text. <br />
            Eligendi accusantium praesentium officia vel reiciendis sint soluta necessitatibus quasi ipsum dolorum, dicta, iste quos, omnis repellendus mollitia suscipit aperiam quaerat nulla?
          </p>

          <h3>Unordered list</h3>
          <ul>
            <li>The first item in a list</li>
            <li>Hey, it's the second!</li>
            <li>What have you heard about the third?</li>
            <li>Well everone has heard that the third is the word</li>
          </ul>

          <h3>Ordered list</h3>
          <ol>
            <li>The first item in a list</li>
            <li>Hey, it's the second!</li>
            <li>What have you heard about the third?</li>
            <li>Well everone has heard that the third is the word</li>
          </ol>

          <h3>Video</h3>
          <video 
            loop="" playsinline="" preload="auto" 
            src="/assets/videos/sample1.mp4">
          </video>


          <h3>Blockquote</h3>
          <blockquote>
            Wow, this quote is so wonderful. I hope cheese quickly zaps a large mule.
          </blockquote>

          <h3>Article</h3>
          <article>
            <header>
              <h3>
                This is header inside an <code>article</code>.
              </h3>
            </header>

            <p>
              And a <code>paragraph</code> following the header
            </p>
          </article>
          


          <!-- EXTRA TEST -->
          <h1>Heading 1</h1>
          <h2>Heading 2</h2>
          <h3>Heading 3</h3>
          
          <h3>Paragraph</h3>
          <p>
            This is an example of paragraph text. <br />
            Eligendi accusantium praesentium officia vel reiciendis sint soluta necessitatibus quasi ipsum dolorum, dicta, iste quos, omnis repellendus mollitia suscipit aperiam quaerat nulla?
          </p>

          <h3>Unordered list</h3>
          <ul>
            <li>The first item in a list</li>
            <li>Hey, it's the second!</li>
            <li>What have you heard about the third?</li>
            <li>Well everone has heard that the third is the word</li>
          </ul>

          <h3>Ordered list</h3>
          <ol>
            <li>The first item in a list</li>
            <li>Hey, it's the second!</li>
            <li>What have you heard about the third?</li>
            <li>Well everone has heard that the third is the word</li>
          </ol>



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
    // showDetailContainer();
  </script>
</body>
</html>