<?php
/* Template Name: Home */
?>

<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
      <?php roots_main_before(); ?>
        <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
        </div><!-- /#main -->
      <div class="categories container">
        <a class="span2" href="equipment" style="background-image: url('wp-content/themes/dandr-roots/img/equipment.png'); background-position: center center; background-repeat: no-repeat;"><h2>Equipment</h2></a>
        <a class="span2" href="child.php" style="background-image: url('wp-content/themes/dandr-roots/img/quality.png'); background-position: center center; background-repeat: no-repeat;"><h2>Quality</h2></a>
        <a class="span2" href="child.php" style="background-image: url('wp-content/themes/dandr-roots/img/industry.png'); background-position: center center; background-repeat: no-repeat;"><h2>Industries</h2></a>
        <a class="span2" href="child.php" style="background-image: url('wp-content/themes/dandr-roots/img/aboutUs.png'); background-position: center center; background-repeat: no-repeat;"><h2>About Us</h2></a>
        <div class="other span2">
          <ul>
            <li><a href="child.php">Contact</a></li>
            <li><a href="child.php">Quotations</a></li>
            <li><a href="child.php">Cool Projects</a></li>
          </ul>
        </div>
      </div>

      <?php roots_main_after(); ?>
      <?php roots_sidebar_before(); ?>
      <?php roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>
