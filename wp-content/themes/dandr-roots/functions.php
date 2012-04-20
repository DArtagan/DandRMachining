<?php 
/***************
RUN after parent functions.php
***************/
function dandr_post_parent_setup() {
/*
 *  Register the custom menus for the theme
 */
  register_nav_menus(
    array(
      'footerNav' => 'Footer Navigation Menu'
    )
  );
}
add_action( 'after_setup_theme', 'dandr_post_parent_setup', 11);
?>
