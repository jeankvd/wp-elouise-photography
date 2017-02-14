<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Elouise's Portfolio</title>
    <!--Fonts-->
    <script src="https://use.fontawesome.com/abebc5126b.js"></script> <!--Font Awesome-->
    <!--Custom CSS-->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!--Head Hooks-->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

  </head>
  <body>
  <!--Navbar-->
    
    <nav class="navbar fixed-top sticky-top navbar-inverse bg-inverse">
    
      <div class="container">
        <a class="navbar-brand" href="#"><span>E</span>louise</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#home">Home <span class="sr-only"></span></a>
            <a class="nav-item nav-link" href="#portfolio">Portfolio</a>
            <a class="nav-item nav-link" href="#bio">Biography</a>
            <a class="nav-item nav-link disabled" href="#contact">Contact</a>
          </div>
        </div>
      </div>
    </nav>
    <!--End Navbar-->

    <!--Arrows for Lightbox-->
    <a href=""><i class="fa fa-chevron-left arrows" id="left" aria-hidden="true"></i></a>
    <a href=""><i class="fa fa-chevron-right arrows" id="right" aria-hidden="true"></i></a>
    <!--Arrows for Lightboxl-->