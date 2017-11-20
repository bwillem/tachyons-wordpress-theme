<?php

/**
 * content-single.php
 *
 **/

 check_direct();

?>
<div id="page-page" <?php post_class('w-100 pt2 pt3-ns lh-copy'); ?>>
  <section class='grid grid-33-66'>
    <div class='grid-sidebar pa3 measure'>
      <h3 class='mt4 b tracked f5'>hours</h3>
      <p>Wed-Fri 1500 - 1900</br>
      Sat&Sun 1200 - 1900</br>
      Closed Monday & Tuesday
      </p>

      <h3 class='mt4 b tracked f5'>location</h3>
      <p>2 - 455 Neave Ct.</br>
      Kelowna, Bc
      </p>

      <h3 class='mt4 b tracked f5'>contact</h3>
      <p>
      778.828.3456</br>
      boundarybrewingco@gmail.com
      </p>
    </div>
    <div class='grid-main pa3 pl5-ns measure'>
      <h2 class="mt3 f2"><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>
  </section> <!-- close grid -->
  <div 
    class='mh3 mv5 img-fp-feature overlay relative'
    style='background: url("<?php echo get_the_post_thumbnail_url()?>") center 80%'>
  </div>

  <section id='beer' class='section'>
    <h2 class='f1 tc b mb1'>The Beer</h2>
    <h3 class='mt3 f2 tc mb5'>Flagships</h3>
    <?php get_template_part( 'archive', 'beer' ); ?>
  </section>
  <section id='instagram' class='section'>
    <h2 class='f1 tc b'>What's Happening</h2>
    <?php echo do_shortcode("[instagram-feed]") ?>
  </section>
  <section id='about' class='section'>
    <h2 class='f1 tc b'>About Boundary</h2>
    <?php dynamic_sidebar('about-section') ?>
  </section>
    <?php wp_link_pages(); ?>


</div> <!-- end page-page -->
