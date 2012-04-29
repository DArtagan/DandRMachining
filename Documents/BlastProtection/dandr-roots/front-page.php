<?php
/* Template Name: Home */
?>

<?php get_header(); ?>
  <div class="topBanner one">
    <img src="<?php echo $stylesheetdir ?>img/logo.png" class="logo" />
  </div>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
      <?php roots_main_before(); ?>
        <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
        </div><!-- /#main -->
      <?php roots_main_after(); ?>
      <?php roots_sidebar_before(); ?>
      <?php roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>
