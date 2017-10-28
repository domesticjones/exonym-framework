<?php
	/* ===========
		 CONTACT TAB
		 =========== */

  if (!defined('WPINC')) { die; }

  // Loop for displaying Contact Info
  function ex_ContactLoop($type = null, $link = true) {
    $navWrapStart = '<nav class="nav-' . $type . '"><ul>';
    $navWrapEnd = '</ul></nav>';
    $typeName = '';
    $typeLink = '';
    if ($type == 'email') {
      $typeName = 'email_addresses';
      $typeLink = 'mailto:';
    } elseif ($type == 'phone') {
      $typeName = 'phone_numbers';
      $typeLink = 'tel:';
    }
    if ($type != null) {
      echo $navWrapStart;
      while (have_rows($typeName, 'options')): the_row();
        $typeData = '';
        if ($type == 'email') {
          $typeData = get_sub_field('address');
        } elseif ($type == 'phone') {
          $typeData = get_sub_field('number');
        }
        echo '<li>';
          if ($link) { echo '<a href="' . $typeLink . $typeData . '" target="_blank">'; }
            if (get_sub_field('name')) { echo '<span class="name">' . get_sub_field('name') . '</span>'; }
            echo '<span class="data">' . $typeData . '</span>';
          if ($link) { echo '</a>'; }
        echo '</li>';
      endwhile;
      echo $navWrapEnd;
    }
  }

  // Contact Lists
  function ex_contact($type, $link = true, $amount = 'all') {
    if ($type == 'email') { if (have_rows('email_addresses', 'options')) { ex_ContactLoop($type, $link); } }
    if ($type == 'phone') { if (have_rows('phone_numbers', 'options')) { ex_ContactLoop($type, $link); } }
  }
