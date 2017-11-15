<?php
  if (!defined('WPINC')) { die; }
  if(have_rows('slides')) {
    echo '<section class="module-slideshow-container">';
    while(have_rows('slides')): the_row(); ?>
      <div>
        <section <?php exCon_containerId(); ?>class="<?php exCon_containerClass(); ?>" style="<?php exCon_containerInline(); ?>">
          <?php exCon_containerBgImage(); ?>
          <div class="<?php exCon_contentClass(); ?>" style="<?php exCon_contentInline(); ?>">
            <?php exCon_contentHtmlPre(); ?>
              <?php
                ex_cta('above');
                the_sub_field('slide_content');
                ex_cta('below');
              ?>
            <?php exCon_contentHtmlPost(); ?>
          </div>
        </section>
      </div>
    <?php endwhile;
    echo '</section>';
  }
?>
