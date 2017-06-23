<?php get_header(); ?>
<div>
  <div>



	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

  </div>
  <div>
	<?php get_sidebar(); ?>	
  </div>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><em><?php the_time(&#039l, F jS, Y'); ?></em></p>
</div>
<?php get_footer(); ?>