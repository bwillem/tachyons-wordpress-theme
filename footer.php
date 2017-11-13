<?php

/**
 * footer.php
 *
 **/

 check_direct();

?>

<footer id="site-footer" class="w-100 bg-near-black moon-gray">
  <div class='contain grid grid-50 pa3 pa4-ns'>

    <?php get_sidebar('sidebar-2'); ?>

    <?php get_sidebar('sidebar-3'); ?>

    <!-- <div id="footer-wp-footer" class="w-100 ph3 pt2 ph6-ns pt3-ns cb"> -->

    <?php wp_footer(); ?>
  </div>
</footer> <!-- end site-footer -->
</body> <!-- end site -->
</html>
