<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <meta name="viewport" content="width=device-width">

  <?php roots_stylesheets(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.5.0.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <?php roots_head(); ?>
  <?php wp_head(); ?>

</head>

<body <?php body_class(roots_body_class()); ?>>

  <!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <?php roots_header_before(); ?>
  <header id="banner" class=" " role="banner">
    <?php roots_header_inside(); ?>
    <div id="topBanner" class="span12">
          <a class="brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img class="logo" src="<?php echo get_stylesheet_directory_uri (); ?>/img/logo.png" /></a>
    </div>
    <?php if(!is_front_page()) { ?>
      <div class="navbar">
        <div class="navbar-inner">
          <div class="<?php echo WRAP_CLASSES; ?>">
            <nav id="nav-main" class="" role="navigation">
              <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Navbar_Nav_Walker())); ?>
            </nav>
          </div>
        </div>
      </div>
    <?php } ?>
  </header>

  <?php roots_header_after(); ?>

  <?php roots_wrap_before(); ?>
  <div id="wrap" class="<?php echo WRAP_CLASSES; ?>" role="document">
