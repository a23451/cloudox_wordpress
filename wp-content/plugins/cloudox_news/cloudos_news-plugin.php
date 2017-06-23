<?php
/*
Plugin Name: cloudox_news
Plugin URI: 
Description: 此插件是我的第二个测试插件，推送新闻
Version: 1.0.0
Author: liming
Author URI: 
License: GPL
*/

add_action('plugins_loaded','cloudox_news_setup_plug');
function cloudox_news_setup_plug(){

}

    // 声明常量来存储插件版本号 和 该插件最低要求WordPress的版本
    define('MY_PLUGIN_VERSION_NUM', '1.0');
    define('MY_PLUGIN_MINIMUM_WP_VERSION', '4.0');

    // 声明全局变量$wpdb 和 数据表名常量
    global $wpdb;
    define('MY_NEW_TABLE', $wpdb->prefix.'mynewtable');


    // 插件激活时，运行的回调方法
    register_activation_hook(__FILE__, 'cloudox_news_plugin_activation_cretable');
    
    function cloudox_news_plugin_activation_cretable() {
   
}




////////////////////////
add_action( 'admin_menu', 'cloudox_news_admin_settings_page' );

function cloudox_news_admin_settings_page() {
add_options_page(
'cloudox_news Settings',
'cloudox_news Settings',
'manage_options',
'cloudox_news_admin_settings',
'cloudox_news_admin_settings_page'
);
add_menu_page('My Plugin Settings Page', 
                'cloudox_news Settings', 
                'manage_options', 
                __FILE__, 
                'cloud_menuexample_settings_page',//布置插件页面的函数
                plugins_url( '/images/wp-icon.png', __FILE )
            );

}

//布置插件页面的函数
function cloud_menuexample_settings_page()
{
	
    global $wpdb;
    $result = $wpdb->get_results("SELECT ID,post_title,post_date,post_author,post_name,post_thumb FROM wp_posts WHERE post_type='post' AND post_status='publish'");




///////////////////////////上半部分，缩略图列表，上传部分//////////////////
    define('THUMB_BASE_URL', plugins_url()."/cloudox_news/");
    echo '<hr><form enctype="multipart/form-data" action="'.plugins_url().'/cloudox_news/wx_thumb.php" method="POST"><input type="text" style="display:none" name="thumb_base_url" value="'.THUMB_BASE_URL.'"><table><tr><td>缩略图地址</td><td>ID</td><td>post_title</td><td>缩略图</td></tr>';
    foreach ($result as $key => $value) {
        echo '<tr><td><input type="file" name="'.$value->ID.'"></td><td>'.$value->ID.'</td><td>'.$value->post_title.'</td><td><a href="'.$value->post_thumb.'">'.$value->post_thumb.'</a></td></tr>';
    }

    echo '</table><button type="submit" style="background:skyblue;color:white;cursor:pointer" >上传缩略图(小于60KB，支持JPG格式)</button></form><hr>';
/////////////////////////上半部分，缩略图列表，上传部分///////////////////



///////////////////////下半部分，文章列表，选择发送部分////////////////////
    echo '<form action="'.plugins_url().'/cloudox_news/hind.php" method="POST"><table><tr><td width="30px">首条</td><td width="30px"></td><td width="60px">缩略图</td><td>ID</td><td>post_title</td><td>post_date</td><td>post_author</td><td>post_name</td></tr>';
    foreach ($result as $key => $value) {
        echo '<tr><td width="30px"><input type="radio" name="first" value="'.$value->ID.'"></td><td width="30px"><input type="checkbox" name="'.$value->ID.'"></td><td width="60px"><a href="'.$value->post_thumb.'">'.$value->post_thumb.'</a></td><td>'.$value->ID.'</td><td>'.$value->post_title.'</td><td>'.$value->post_date.'</td><td>'.$value->post_author.'</td><td>'.$value->post_name.'</td></tr>';
    }
    echo '</table><input style="background:skyblue;color:white;cursor:pointer" type="submit" name="action" value="media_preview"/><input style="background:skyblue;color:white;cursor:pointer" type="submit" name="action" value="preview"/><input style="background:orange;color:white;cursor:pointer" type="submit" name="action" value="sendall"/></form>';
///////////////////////下半部分，文章列表，选择发送部分///////////////////


}







?>