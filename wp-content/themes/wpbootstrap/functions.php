<?php 
/**
 * WordPress 后台用户列表添加更多操作功能
 * https://www.wpdaxue.com/user-row-actions.html
 */
add_filter( 'user_row_actions', 'wpdaxue_user_row_actions', 10, 2 );
function wpdaxue_user_row_actions( $actions, $user_object ) {
    if($user_object->user_url) { // 如果存在网址
        $actions['website'] = '<a href="'.$user_object->user_url.'" target="_blank">访问网站</a>';
    }
    return $actions;
}
/*
 WordPress 后台用户列表添加更多操作功能
*/


function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
    echo "<hr>wp内置钩子<hr>";
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
function myfunc()
{
    echo "<hr>自定义钩子<hr>";
}
add_action( 'myact', 'myfunc' );


function customContent($limit) {
    $content = the_post($post->ID);
    if(strlen($content) > $limit) {
        $content = substr($content, 0, $limit) . '...';
    }
 
    echo $content;
}
function customTitle($limit) {
    $title = get_the_title($post->ID);
    if(strlen($title) > $limit) {
        $title = substr($title, 0, $limit) . '...';
    }
 
    echo $title;
}
//开启缩略功能
add_theme_support( 'post-thumbnails' ); 
add_theme_support('post-thumbnails', array('post'));
add_theme_support('post-thumbnails', array('page'));
?>