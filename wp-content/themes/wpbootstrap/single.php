<?php get_header(); ?>


<?php echo "single.php"; ?>
 <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><!-- 文章链接 -->
 <?php the_tags('标签：', ', ', ''); ?>
 <?php the_time('Y年n月j日') ?>
 <?php the_title(); ?>当前文章标题
 <hr>

分类: <?php the_category() ?>
作者: <?php the_author(); ?>
 <hr>分类目录
 <?php wp_list_categories(); ?>

当前文章
 <hr>
 <?php if ( has_post_thumbnail() ) : ?>
     缩略图<?php the_post_thumbnail( 'thumbnail' ); ?>
<?php else: ?>
    //显示默认图片
<?php endif; ?>
 <hr>
 <?php while(have_posts()){the_post();the_content();} ?>
 <?php next_post_link(' %link '); ?>
 <?php previous_post_link('%link'); ?>


 <hr>
 显示内容存档(什么？？？)
 <?php wp_get_archives() ?>
 <?php _e('Message'); ?>