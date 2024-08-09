<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="pageName">
			
		</div>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>