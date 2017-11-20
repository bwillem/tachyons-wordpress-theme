<?php

/**
 * archive-beer.php
 *
 **/

 check_direct();

  $args = array( 
      'numberposts' => '6', 
      'post_status' => 'publish', 
      'post_type' => 'beer' ,
  );

  $beer = new WP_Query( $args );
?>
<div class='grid-wrap pa3 mb4'>

  <?php
    $i = 1;
    while( $beer->have_posts() ) :
      $beer->the_post();
  ?>
  <div class='one-fourth measure'>
    <div class='img-beer-wrap'>
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Boundary Brewing Beer" class='round' />
    </div>
    <h3 
      class="pt3 f3 lh-title">
      <?php the_title(); ?>
    </h3>
    <div class="lh-copy">
      <?php the_content(); ?>
    </div>
  </div>
  <?php
    $i ++;
    endwhile;
  ?>
</div>
