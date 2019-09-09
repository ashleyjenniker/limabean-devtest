<!DOCTYPE html>
<html lang="en-za">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">

  <title>Ashley Jenniker: Lima Bean dev test - September 8, 2019</title>
  <meta name="description" content="">

  <!-- load stlyesheets -->
  <link rel="stylesheet" href="assets/css/main.css">

  <!-- load Google fonts -->
  <script type="text/javascript">
    WebFontConfig = {
      google: { families: [ 'Montserrat:300,500,700:latin', 'Roboto:300,700:latin' ] }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>

</head>

<body>

  <div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="header">

      <!-- Navbar -->
      <nav id="navbar" class="navbar navbar-expand-lg">
        <div class="container">

          <!-- Header Banding -->
          <a class="branding" href="/">
            <?php readfile ('assets/images/logo.svg'); ?>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <?php readfile ('assets/images/menu.svg'); ?>
            </span>
          </button>

          <!-- Header Main Menu -->
          <div id="main-menu" class="collapse navbar-collapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#activities">Activities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#partners">Partners</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Log in</a>
              </li>
              <li class="nav-item">
                <a class="nav-link sign-up" href="#">Sign up</a>
              </li>
            </ul>
          </div>

        </div>
      </nav>

    </header>

    <!-- Greeting -->
    <article id="greeting" class="greeting valign text-center bg-img">

      <div class="container">
        <h1 class="greeting-headline text-uppercase">
          <span>Share your</span> 
          <span>Holiday Dream</span>
        </h1>
        <p class="greeting-blurb">And find the perfect partner to fulfull it</p>
        <button type="button" class="btn btn-pink greeting-cta">Find your holiday partner</button>
      </div>

    </article>

    <!-- Partners -->
    <article id="partners" class="partners text-center section-padding">

      <div class="container">
        <h2 class="h3 title mb-5">Meet a partner for your best holiday</h2>

        <div class="row">
          
          <!-- Partner 1 -->
          <div class="col-sm-6 col-md-3 mb-4">
            <figure class="partners-profile profile">
              <img src="assets/images/partner1.jpg" class="rounded-circle" alt="partner1" />
              <figcaption class="partners-caption rounded-circle bg-pink">
                <?php readfile ('assets/images/music.svg'); ?>
              </figcaption class="partners-caption rounded-circle">
            </figure>
            <h3 class="partners-name h5">Bradley Hunter</h3>
            <p class="partners-blurb">Based in Chicago. I love playing tennis and loud music.</p>
          </div>
          
          <!-- Partner 2 -->
          <div class="col-sm-6 col-md-3 mb-4">
            <figure class="partners-profile profile">
              <img src="assets/images/partner2.jpg" class="rounded-circle" alt="partner1" />
              <figcaption class="partners-caption rounded-circle bg-green">
                <?php readfile ('assets/images/brush.svg'); ?>
              </figcaption class="partners-caption rounded-circle">
            </figure>
            <h3 class="partners-name h5">Marie Bennett</h3>
            <p class="partners-blurb">Currently in Colorado. Lover of art, languages and traveling.</p>
          </div>
          
          <!-- Partner 3 -->
          <div class="col-sm-6 col-md-3 mb-4">
            <figure class="partners-profile profile">
              <img src="assets/images/partner3.jpg" class="rounded-circle" alt="partner1" />
              <figcaption class="partners-caption rounded-circle bg-orange">
                <?php readfile ('assets/images/camera.svg'); ?>
              </figcaption class="partners-caption rounded-circle">
            </figure>
            <h3 class="partners-name h5">Diana Wells</h3>
            <p class="partners-blurb">Living in Athens, Greece. I love black and white classics, chillout music and green trea.</p>
          </div>
          
          <!-- Partner 4 -->
          <div class="col-sm-6 col-md-3 mb-4">
            <figure class="partners-profile profile">
              <img src="assets/images/partner4.jpg" class="rounded-circle" alt="partner1" />
              <figcaption class="partners-caption rounded-circle bg-purple">
                <?php readfile ('assets/images/airplane.svg'); ?>
              </figcaption class="partners-caption rounded-circle">
            </figure>
            <h3 class="partners-name h5">Christopher Pierce</h3>
            <p class="partners-blurb">Star Wars fanatic. I have a persistent enthusiasm to create new things.</p>
          </div>

          <!-- See all button -->
          <div class="col-12">
            <button type="button" class="btn btn-outline-pink">See other partners</button>
          </div>

        </div>

      </div>

    </article>

    <!-- activities -->
    <article id="activities" class="activities text-center section-padding">

      <div class="container">
        <h2 class="h3 title mb-5">Discover holiday activity ideas</h2>

        <div class="row">

          <!-- Sports -->
          <div class="activities-col col-sm-6 col-md-4">
            <a href="#" class="activities-box valign bg-img" style="background-image: url('assets/images/block1Sports.jpg');">
              <h3 class="activities-name h5">Sports</h3>
            </a>
          </div>

          <!-- Wellness and Health -->
          <div class="activities-col col-sm-6 col-md-4">
            <a href="#" class="activities-box valign bg-img" style="background-image: url('assets/images/block2Wellness.jpg');">
              <h3 class="activities-name h5">Wellness and Health</h3>
            </a>
          </div>

          <!-- Expeditions -->
          <div class="activities-col col-sm-6 col-md-4">
            <a href="#" class="activities-box valign bg-img" style="background-image: url('assets/images/block3Expeditions.jpg');">
              <h3 class="activities-name h5">Expeditions</h3>
            </a>
          </div>

          <!-- Games -->
          <div class="activities-col col-sm-6 col-md-4">
            <a href="#" class="activities-box valign bg-img" style="background-image: url('assets/images/block4Games.jpg');">
              <h3 class="activities-name h5">Games</h3>
            </a>
          </div>

          <!-- Culture and Education -->
          <div class="activities-col col-sm-12 col-md-8">
            <a href="#" class="activities-box valign bg-img" style="background-image: url('assets/images/block5Culture.jpg');">
              <h3 class="activities-name h5">Culture and Education</h3>
            </a>
          </div>

          <!-- Beauty and Relaxation -->
          <div class="activities-col col-sm-12 col-md-8">
            <a href="#" class="activities-box valign bg-img" style="background-image: url('assets/images/block6Beauty.jpg');">
              <h3 class="activities-name h5">Beauty and Relaxation</h3>
            </a>
          </div>

          <!-- Traveling -->
          <div class="activities-col col-sm-6 col-md-4">
            <a href="#" class="activities-box valign bg-img" style="background-image: url('assets/images/block4Games.jpg');">
              <h3 class="activities-name h5">Traveling</h3>
            </a>
          </div>

        </div>

      </div>

    </article>

    <!-- Footer -->
    <footer id="footer" class="footer">
      <div class="container">

        <div class="row">
            
          <!-- Footer Banding -->
          <div class="col-sm-12 col-md-3 mb-4">
            <a class="branding" href="/">
              <?php readfile ('assets/images/logo.svg'); ?>
            </a>
          </div>
            
          <!-- Footer Mneu -->
          <div class="col-6 col-sm-4 col-md-3 mb-2">
            <h4 class="footer-menu-title h6">Company</h4>
            <ul class="footer-menu">
              <li>
                <a href="#">About</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
              <li>
                <a href="#">Press</a>
              </li>
              <li>
                <a href="#">Terms and Privacy</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
            </ul>
          </div>
            
          <!-- Footer Mneu -->
          <div class="col-6 col-sm-4 col-md-3 mb-2">
            <h4 class="footer-menu-title h6">Activities</h4>
            <ul class="footer-menu">
              <li>
                <a href="#">Sports</a>
              </li>
              <li>
                <a href="#">Wellness and Health</a>
              </li>
              <li>
                <a href="#">Expeditions</a>
              </li>
              <li>
                <a href="#">Games</a>
              </li>
              <li>
                <a href="#" class="text-danger">View all</a>
              </li>
            </ul>
          </div>
            
          <!-- Footer Mneu -->
          <div class="col-sm-4 col-md-3">
            <h4 class="footer-menu-title h6">Contact Us</h4>
            <ul class="footer-menu">
              <li>
                <a href="tel:0000000000">Tel: (000) 000-0000</a>
              </li>
              <li>
                <a href="mailto:dreamshare@email.com">Email: dreamshare@email.com</a>
              </li>
            </ul>
          </div>

        </div>

      </div>      
    </footer>

  </div>

  <!-- load scripts -->
  <script src="assets/js/jquery-3.0.0.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>