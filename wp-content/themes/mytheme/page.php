<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1>page<?php the_title(); ?></h1>
        <?php the_content(); ?>

    <?php endwhile; else: ?>
        <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>