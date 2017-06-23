<?php  
//导入wordpress设置文件             
define('WP_USE_THEMES', false);               
query_posts('showposts=4'); //设置显示两篇文章  
while (have_posts()): the_post();  
?>  
<li>                        
<a href="<?php the_permalink(); ?>" target="_blank" style=" color:#000">  
<?php echo mb_strimwidth(strip_tags(apply_filters('the_title', $post->post_title)), 0, 50," "); ?></a>  
<span class="date"> Posted on <?php echo mysql2date('j.m.Y', $post->post_date); ?></span></p>                    <p>  
<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 400," ") ?></p>                       </li>   
<?php  
endwhile;         
?> 