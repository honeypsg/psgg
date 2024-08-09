<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-sm-8">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content' ); ?>
      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
      <?php 
				if(function_exists('wp_paginate')) {
					wp_paginate();
				} ?>
    </div>
    <div class="col-md-4 col-sm-4">

    </div>
  </div>

</div>
<?php get_footer(); ?>