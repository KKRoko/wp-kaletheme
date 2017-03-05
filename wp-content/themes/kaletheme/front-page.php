<?php

  get_header(); ?>

  <div>
    <?php if (have_posts()) :
      while (have_posts()) : the_post(); ?>
      <div id="hero">
        <div id="hero-msg-container">
          <div id="hero-msg">
            <h1 id="hero-title"><?php the_field('main_header');?></h1>
            <p>Web apps designed with you in mind</p>
          </div>
        </div>
        <div id="particles-js"></div>
      </div>

      <?php the_content();

      endwhile;

      else :
        echo "<p>No content found</p>";

      endif; ?>
  </div>

<?php get_footer(); ?>
