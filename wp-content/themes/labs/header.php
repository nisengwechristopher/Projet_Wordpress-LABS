<!DOCTYPE html>
<html lang="en">

<head>
  <title>Labs - Design Studio</title>
  <meta charset="UTF-8">
  <meta name="description" content="Labs - Design Studio">
  <meta name="keywords" content="lab, onepage, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon && Google Fonts && Stylesheets -->

<?php
  wp_head();
?>
  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader">
      <img src="<?= 'wp-content/themes/labs/img/logo.png'?> alt="">
      <h2>Loading.....</h2>
    </div>
  </div>


  <!-- Header section -->
  <header class="header-section">
    <div class="logo">
      <!-- Logo -->
      <a id= "labs_logo" href="<?= get_site_url() ?>"><img src="<?= 'wp-content/themes/labs/img/logo.png'?>" alt=""></a>
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
      <ul class="menu-list">
        <li class="active"><a href="home.html">Home</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="elements.html">Elements</a></li>
      </ul>
    </nav>
  </header>
  <!-- Header section end -->

  <!-- FIN HEADER
	============================================ -->