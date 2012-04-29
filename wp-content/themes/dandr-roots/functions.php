<?php 
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
