page通用模板
<?php get_header(); ?>

<div>
  <div>
 

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        


	<?php endwhile; else: ?>
		<p><?php _e('Sorry, there are no posts.'); ?></p>
	<?php endif; ?>
	

  </div>
  <div>
	<?php get_sidebar(); ?>	
  <p><em><?php the_time('Y年n月j日'); ?></em></p>
  </div>
</div>
<?php get_footer(); ?>