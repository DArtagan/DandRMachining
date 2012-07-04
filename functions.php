<?php 

add_action("roots_header_before", "dandr_customHeader");

function dandr_customHeader() {
  echo '<div id="superWrap">
    <header id="banner" class=" " role="banner">'
      . roots_header_inside() . 
      '<div id="topBanner" class="span12">
        <a class="brand" href="' . home_url() . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home"><img class="logo" src="' . get_stylesheet_directory_uri() . '/img/logo.png" /></a>
      </div>';
      if(!is_front_page()) {
        echo '<div class="navbar">
          <div class="navbar-inner">
            <div class="' . WRAP_CLASSES . '">
              <nav id="nav-main" class="" role="navigation">'
                . wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Navbar_Nav_Walker())) . 
              '</nav>
            </div>
          </div>
        </div>';
      }
    echo '</header>';
}

/***************
RUN after parent functions.php
***************/

register_sidebar(array('name' => 'test', 'id' => 'test'));

function dandr_post_parent_setup() {
/*
 *  Register the custom menus for the theme
 */
  register_nav_menus(
    array(
      'footerNav' => 'Footer Navigation Menu'
    )
  );

remove_theme_support('bootstrap-top-navbar');
  
/*
 * Unregister sidebar for pages
 */
 unregister_sidebar( 'Sidebar' );
}
add_action( 'after_setup_theme', 'dandr_post_parent_setup', 11);

function my_unregister_sidebars() {
  unregister_sidebar( 'roots-sidebar' );
            }

            //unregister sidebars by tying onto same hook again, with priority '11'
            add_action( 'widgets_init', 'my_unregister_sidebars', 11 );
?>
