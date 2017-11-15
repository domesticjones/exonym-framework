<?php
  /*
    Plugin Name: Exonym - Content Architect
    Plugin URI: http://domesticjones.com
    Description: Modules for building out page content
    Version: 1.0
    Author: Dustin Jones
    Author URI: http://domesticjones.com
    Text Domain: exCon
  */

  if (!defined('WPINC')) { die; }

  require_once('fields.php');

  function ex_content() {
    if (have_rows('content_architect')) {
      include('wrappers/wrap-start.php');
      while (have_rows('content_architect')) {
        the_row();
        require_once('ctas.php');
        include('wrappers/container-start.php');
        include('wrappers/content-start.php');
        require_once('modules/module-logic.php');
        ex_cta('above');
        if (get_row_layout() == 'carousel') {
          include('modules/carousel.php');
        } elseif (get_row_layout() == 'code') {
          include('modules/code.php');
        } elseif (get_row_layout() == 'content') {
          include('modules/content.php');
        } elseif (get_row_layout() == 'multi-column') {
          include('modules/multi-column.php');
        } elseif (get_row_layout() == 'slideshow') {
          include('modules/slideshow.php');
        } elseif (get_row_layout() == 'staff') {
          include('modules/staff.php');
        }
        ex_cta('below');
        include('wrappers/content-end.php');
        include('wrappers/container-end.php');
      }
      include('wrappers/wrap-end.php');
    }
  }
