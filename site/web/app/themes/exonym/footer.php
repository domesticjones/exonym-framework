<?php
  /* ==============
     DEFAULT FOOTER
     ============== */
?>
    <footer id="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
      <div class="wrap">
        <nav class="dropdown-menu cf" role="navigation">
          <?php wp_nav_menu(array(
            'container' => 'ul',                    // enter '' to remove nav container
            'container_class' => 'footer-links cf',	// class of container (should you choose to use it)
            'menu' => __('Footer', 'exonym'),	      // nav name
            'menu_class' => 'nav footer-nav cf',    // adding custom nav class
            'theme_location' => 'footer-menu',		  // where it's located in the theme
            'before' => '',							            // before the menu
            'after' => '',							            // after the menu
            'link_before' => '',					          // before each link
            'link_after' => '',						          // after each link
            'depth' => 1,							              // limit the depth of the nav
            'fallback_cb' => ''						          // fallback function
          )); ?>
        </nav>
      </div>
    </footer>
  </div>
  <?php
    get_template_part('templates/modal');
    get_template_part('templates/navigation', 'responsive');
    wp_footer();
  ?>
</body>
</html>
