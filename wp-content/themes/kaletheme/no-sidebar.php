<?php
/*
* Template Name: No Sidebar Page
*
 * @package KaleTheme
 */

?>
<?php

  get_header(); ?>

  <div>
    <?php if (have_posts()) :
      while (have_posts()) : the_post(); ?>


      <?php the_content();

      endwhile;

      else :
        echo "<p>No content found</p>";

      endif; ?>
  </div>

<?php get_footer(); ?>
