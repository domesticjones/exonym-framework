<nav id="nav-responsive" class="nav-top" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
  <section class="nav-container">
    <span id="responsive-nav-close-secondary"><?php echo file_get_contents(asset_path('images/icon-close.svg')); ?></span>
    <a href="<?php echo get_home_url(); ?>">
    </a>
    <?php wp_nav_menu(array(
      'container' => false,                       // remove nav container
      'container_class' => '',                    // class of container (should you choose to use it)
      'menu' => __( 'Responsive', 'exonym' ),	    // nav name
      'menu_class' => 'responsive-nav-menu',      // adding custom nav class
      'theme_location' => 'responsive-menu',      // where it's located in the theme
      'before' => '',                             // before the menu
      'after' => '',                              // after the menu
      'link_before' => '',                        // before each link
      'link_after' => '',                         // after each link
      'depth' => 0,                               // limit the depth of the nav
      'fallback_cb' => ''                         // fallback function (if there is one)
    )); ?>
  </section>
</nav>
