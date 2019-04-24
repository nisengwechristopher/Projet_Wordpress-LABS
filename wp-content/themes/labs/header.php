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
  <div id="prelonder">
    <div class="loader">
       <!-- Pour le changement de l'icone sur dans preload-->
      <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'thumbnail', true );
      ?>
      <img class="logo_size" src="<?php echo $image[0]; ?>" alt="">
      <h2>Loading...</h2>
    </div>
  </div>


  <!-- Header section -->
  <header class="header-section">
    <div class="logo">
      <!-- Logo -->
      <a href="<?= get_site_url() ?>">
       <!-- Pour le changement de l'icone sur le site -->
        <img class="logo_size" src="<?php echo $image[0]; ?>" alt="">
      </a>
    </div>
    <!-- Navigation -->
    <div id="menu_navig"class="responsive"><i class="fa fa-bars"></i></div>
    <!-- Nouveau menu -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
     <!-- Nouveau menu -->
     <?php
      wp_nav_menu([
        'container' => '',
        'theme_location' => 'menu-principal',
        'menu_class' => 'menu-list',
        'add_li_class' => 'nav-item'
      ]);
    ?>
  </header>
  <!-- Header section end -->

  <!-- FIN HEADER
	============================================ -->