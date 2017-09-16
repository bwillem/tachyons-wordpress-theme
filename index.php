<?php

/**
 * index.php
 *
 **/

 check_direct();

?>
<?php get_header(); ?>

<main id="site-index" class="w-100 pl3 pl6-ns">

  <div id="index-title" class="w-100">

    <h2 class="f4 f1-ns lh-title screen-reader-text measure">Posts</h2>

  </div> <!-- end site-index -->

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'index', 'excerpt' ); ?>

<?php endwhile; ?>

  <div class="w-100 f3 pt2 pt3-ns">

    <nav id="index-navigation">
      <div id="navigation-left" class="w-100 w-50-ns tl f3 f2-ns lh-copy">
        <p><?php previous_posts_link( '&larr; Newer' ); ?></p>
      </div> <!-- end navigation-left -->
      <div id="navigation-right" class="w-100 w-50-ns tl f3 f2-ns lh-copy">
        <p><?php next_posts_link( 'Older &rarr;' ); ?></p>
      </div> <!-- end navigation-right -->
    </nav> <!-- end index-navigation -->

  </div>

<?php else : ?>

  <div id="index-none" class="w-100">

      <?php get_template_part( 'content', 'none' ); ?>

  </div> <!-- end index-none -->

<?php endif; ?>
</main> <!-- end site-index -->

<?php get_footer(); ?>
