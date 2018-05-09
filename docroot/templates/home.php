<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>HHOA | Welcome to Heatherstone!</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/vendor/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/styles.css">

        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <div class="header">
          <div class="header-container">
            <a href="/" class="logo">HHOA | Heatherstone Homeowners' Association</a>
          </div>
        </div>

        <div class="ribbon"></div>
        <?php print $content; ?>
        <div class="ribbon"></div>

        <div class="footer">
          <div class="footer-container container">
            <div class="row">
              <div class="col-md-4 footer-section">
                <h6>Quick Links:</h6>
                <ul>
                  <li><a href="/all-files">Welcome to Heatherstone!</a></li>
                  <li><a href="/all-files">All HOA Files</a></li>
                  <li><a href="/all-files">Calendar</a></li>
                </ul>
              </div>
              <div class="col-md-4 footer-section">
                <h6>Contact Us:</h6>
                <p>
                  <strong>By Mail:</strong><br />
                  200 Apples Way<br />
                  Batavia, OH 45103<br />

                  <strong>Financial Office:</strong><br />
                  Phone: <a href="tel:5134597100">513-459-7100</a><br />
                  Email: <a href="mailto:">aai5134597100@gmail.com</a><br />
                </p>
              </div>
              <div class="col-md-4 footer-section">
                <h6>Make HOA Payments To:</h6>
                <p>
                  Heatherstone HOA<br />
                  P. O. Box 747<br />
                  Mason, OH 45040
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 copyright">
                &copy; Copyright <?php print date("Y"); ?> Heatherstone HOA. All Rights Reserved.
              </div>
            </div>
          </div>
        </div>
    </body>
</html>
