<?php get_header(); ?>


<hr>
分类为news的文章
<hr>
<?php query_posts('category_name=news'); if ( have_posts() ) : while ( have_posts() ) : the_post();?> <?php the_title();?><?php the_content(); ?>
<a href="<?php the_permalink();?>"><?php the_title(); ?></a><?php comments_popup_link(); ?>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<!-- 
query_posts();按需查找
the_permalink();(Post/Page) Url
comments_popup_link();评论链接
 -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php do_action('myact'); ?>
<?php 
$query = new WP_Query( 'category_name=news' );

//var_dump($query);
// WordPress 常用函数 WP_Query()调用文章列表的各种用法
?>


