  </div><!-- /#wrap -->
  <div class="push"></div>
  </div><!-- /#superWrap -->

  <?php roots_footer_before(); ?>
  <footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
    <div>
      <?php roots_footer_inside(); ?>
      <?php dynamic_sidebar('roots-footer'); ?>
      <p class="copy"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></p>
    </div>
    <div class="vcard">
      <span class="fn org">D&amp;R CNC Machining, Inc.</span>
      <a href="mailto:sales@dandrmachining.com" class="email">sales@dandrmachining.com</a>
      <div class="adr">
        <div class="street-address">791 Southpark Drive</div>
        <div class="extended-address">Suite 900</div>
        <span class="locality">Littleton</span>, <span class="region">CO</span>, <span class="postal-code">80120</span>
      </div>
      <div class="tel">303-781-2949</div>
    </div>
  </footer>
  <?php roots_footer_after(); ?>

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>

</body>
</html>
