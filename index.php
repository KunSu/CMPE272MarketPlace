<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- Basic Page Needs
   ================================================== -->
    <meta charset="utf-8">
    <title>Puremedia</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media-queries.css">

    <!-- Script
   =================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- Favicons
	=================================================== -->
    <link rel="shortcut icon" href="favicon.png">

</head>

<body class="homepage">

    <div id="preloader">
        <div id="status">
            <img src="images/loader.gif" height="60" width="60" alt="">
            <div class="loader">Loading...</div>
        </div>
    </div>


    <!-- Header
   =================================================== -->
    <header id="main-header">

        <div class="row header-inner">

            <div class="logo">
                <a class="smoothscroll" href="#hero">Puremedia.</a>
            </div>

            <nav id="nav-wrap">

                <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
                    <span class='menu-text'>Show Menu</span>
                    <span class="menu-icon"></span>
                </a>
                <a class="mobile-btn" href="#" title="Hide navigation">
                    <span class='menu-text'>Hide Menu</span>
                    <span class="menu-icon"></span>
                </a>

                <ul id="nav" class="nav">
                    <li class="current"><a class="smoothscroll" href="#hero">Home.</a></li>
                    <li><a class="smoothscroll" href="#portfolio">Works.</a></li>
                    <li><a class="smoothscroll" href="#services">Services.</a></li>
                    <li><a class="smoothscroll" href="#about">About.</a></li>
                    <li><a class="smoothscroll" href="#journal">News.</a></li>
                    <li><a class="smoothscroll" href="#contact">Contacts.</a></li>
                    <li><a href="login.php">Login.</a></li>
                    <li><a href="histories.php">Histories.</a></li>
                </ul>

            </nav> <!-- /nav-wrap -->

        </div> <!-- /header-inner -->

    </header>


    <!-- Hero
   =================================================== -->
    <section id="hero">

        <div class="row hero-content">

            <div class="twelve columns flex-container">

                <div id="hero-slider" class="flexslider">

                    <ul class="slides">

                        <!-- Slide -->
                        <li>
                            <div class="flex-caption">
                                <h1>Welcome to Team Wonderful's Market Place.</h1>
                                <p><a class="button stroke smoothscroll" href="#about">More About Us</a></p>
                            </div>
                        </li>

                    </ul>

                </div> <!-- .flexslider -->

            </div> <!-- .flex-container -->

        </div> <!-- .hero-content -->

    </section> <!-- #hero -->


    <!-- Portfolio
   ================================================== -->

    <!-- Kun's Company -->
    <?php include "KunSu.php"; ?>
    <!-- The end of Kun's Company -->

    <!-- Lijuan's Company -->
    <?php include "Lijuan.php"; ?>
    <!-- The end of Lijuan's Company -->

    <!-- Taylor's Company -->
    <?php include "Taylor.php"; ?>
    <!-- The end of Taylor's Company -->

    <!-- Junyan's Company -->
    <?php include "Junyan.php"; ?>
    <!-- The end of Junyan's Company -->

    <!-- Zijian's Company -->
    <?php include "Zijian.php"; ?>
    <!-- The end of Zijian's Company -->

    <!-- Ru's Company -->
    <?php include "Ru.php"; ?>
    <!-- The end of Ru's Company -->

    <!-- Footer
   ================================================== -->
    <footer>

        <div class="row">

            <div class="six columns tab-whole footer-about">

                <h3>About Puremedia</h3>

                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                    Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                    nibh id elit.
                </p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>

            </div> <!-- /footer-about -->

            <div class="six columns tab-whole right-cols">

                <div class="row">

                    <div class="columns">
                        <h3 class="address">Contact Us</h3>
                        <p>
                            1600 Amphitheatre Parkway<br>
                            Mountain View, CA<br>
                            94043 US
                        </p>

                        <ul>
                            <li><a href="tel:6473438234">647.343.8234</a></li>
                            <li><a href="tel:1234567890">123.456.7890</a></li>
                            <li><a href="mailto:someone@puremedia.com">someone@puremedia.com</a></li>
                        </ul>
                    </div> <!-- /columns -->

                    <div class="columns last">
                        <h3 class="contact">Follow Us</h3>

                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">GooglePlus</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Flickr</a></li>
                            <li><a href="#">Skype</a></li>
                        </ul>

                    </div> <!-- /columns -->

                </div> <!-- /Row(nested) -->

            </div>

            <p class="copyright">&copy; Copyright 2014 Puremedia. Design by <a
                    href="http://www.styleshout.com/">Styleshout.</a></p>

            <div id="go-top">
                <a class="smoothscroll" title="Back to Top" href="#hero"><span>Top</span><i
                        class="fa fa-long-arrow-up"></i></a>
            </div>

        </div> <!-- /row -->

    </footer> <!-- /footer -->


    <!-- Java Script
   ================================================== -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')
    </script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/backstretch.js"></script>
    <script src="js/waypoints.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
