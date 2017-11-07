<?php

/**
 * archive-beer.php
 *
 **/

 check_direct();

  $args = array( 
      // 'numberposts' => '6', 
      'post_status' => 'publish', 
      'post_type' => 'beer' ,
  );

  $beer = new WP_Query( $args );
?>
<div class='grid grid-33'>

  <?php
    $i = 1;
    while( $beer->have_posts() ) :
      $beer->the_post();
  ?>
  <div class='gc-<?php echo $i ?>'>
    <h3 
      class="pt3 f2 lh-title">
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
