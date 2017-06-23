<?php
/*
Plugin Name: Copyright plugin cloudox
Plugin URI: 
Description: 此插件是我的第一个测试插件，记录浏览信息
Version: 2.0.0
Author: liming
Author URI: 
License: GPL
*/

add_action('plugins_loaded','setup_plug');
function setup_plug(){

}

    // 声明常量来存储插件版本号 和 该插件最低要求WordPress的版本
    define('MY_PLUGIN_VERSION_NUM', '1.0');
    define('MY_PLUGIN_MINIMUM_WP_VERSION', '4.0');

    // 声明全局变量$wpdb 和 数据表名常量
    global $wpdb;
    define('MY_NEW_TABLE', $wpdb->prefix.'mynewtable');


    // 插件激活时，运行回调方法创建数据表, 在WP原有的options表中插入插件版本号
    register_activation_hook(__FILE__, 'plugin_activation_cretable');
    
    function plugin_activation_cretable() {
        global $wpdb;
        /*
         * We'll set the default character set and collation for this table.
         * If we don't do this, some characters could end up being converted 
         * to just ?'s when saved in our table.
         */
        $charset_collate = '';

        if (!empty($wpdb->charset)) {
          $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset}";
        }

        if (!empty( $wpdb->collate)) {
          $charset_collate .= " COLLATE {$wpdb->collate}";
        }

      $sql="CREATE TABLE If Not Exists `wp_test` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `storageId` varchar(255) DEFAULT NULL,
          `href` varchar(255) NOT NULL DEFAULT '',
          `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
          `timein` int(255) NOT NULL,
          `timeout` int(255) DEFAULT NULL,
          `time` int(255) DEFAULT NULL,
          `action` varchar(255) NOT NULL,
          `move` varchar(255) NOT NULL,
          `os` varchar(255) DEFAULT NULL,
          `mobile` varchar(255) DEFAULT NULL,
          `pageid` int(255) DEFAULT NULL,
          PRIMARY KEY (`id`)
            ) ENGINE=MyISAM AUTO_INCREMENT=261 DEFAULT CHARSET=latin1;";


        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );

        // update_option()方法，在options表里如果不存在更新字段，则会创建该字段,存在则更新该字段
        update_option('my_plugin_version_num', MY_PLUGIN_VERSION_NUM);

        // add_action('wp_head','yinrujs');
        // function yinrujs(){
        //     wp_enqueue_script('p-jquery.min',plugins_url('js/p-jquery.min.js',__FILE__));
        //     wp_enqueue_script('p-mobile.js',plugins_url('js/p-mobile.js',__FILE__));
        //     wp_enqueue_script('p-mobile-detect',plugins_url('js/p-mobile-detect.min.js',__FILE__));
        // }

 
}


        add_action('wp_footer','yinru');
        function yinru(){



echo '<script src="'.plugin_dir_url(__FILE__ ).'js/p-mobile-detect.min.js"></script>';
            echo '<script>var mobile,os;
$(document).ready(function(){
    if(!localStorage.uniqid){var num=Math.round(Math.random()*100000);localStorage.uniqid=num;}//标记当前用户
    window.ico=Math.round(Math.random()*100000);//标记当前页面
    localStorage.move=0;
    $(window).scroll( function(e) { 
        localStorage.move++;console.log(localStorage.move);//scroll时间记录滑动页面的时间
         } );
       
       // 设备型号操作系统
        var arr=new Array();
        arr=shebeixx();
        os=arr[\'os\'];mobile=arr[\'model\'];
        href=window.location.href;
        //alert(localStorage.uniqid+"---"+1+"---"+localStorage.move+"---"+os+"---"+mobile+"---"+href);
    $.get("'.plugin_dir_url(__FILE__ ).'hind.php",{uniqid:localStorage.uniqid,pageid:window.ico,action:document.body.scrollHeight,move:localStorage.move,os:os,mobile:mobile,href:href},function(data){
       console.log(data);
        });
});
window.onbeforeunload=function(){
    href=window.location.href;
    $.get("'.plugin_dir_url(__FILE__ ).'hind.php",{uniqid:localStorage.uniqid,pageid:window.ico,action:2,move:localStorage.move,os:os,mobile:mobile},function(data) {
    	console.log(data);  
    });
    
}

function shebeixx() {
    //判断数组中是否包含某字符串
    Array.prototype.contains = function(needle) {
        for (i in this) {
            if (this[i].indexOf(needle) > 0)
                return i;
        }
        return -1;
    }    
    var device_type = navigator.userAgent;//获取userAgent信息
    //document.write(device_type);//打印到页面
    var md = new MobileDetect(device_type);//初始化mobile-detect
    var os = md.os();//获取系统
    var model = "";
    if (os == "iOS") {//ios系统的处理
        os = md.os() + md.version("iPhone");
        model = md.mobile();
    } else if (os == "AndroidOS") {//Android系统的处理
        os = md.os() + md.version("Android");
        var sss = device_type.split(";");
        var i = sss.contains("Build/");
        if (i > -1) {
            model = sss[i].substring(0, sss[i].indexOf("Build/"));
        }
    }
    console.log(os + "---" + model);//打印系统版本和手机型号
    
    var osMobile=new Array();
    osMobile[\'os\']=os;
    osMobile[\'model\']=model;
    return osMobile;

}</script>';

        }


////////////////////////
add_action( 'admin_menu', 'boj_admin_settings_page' );

function boj_admin_settings_page() {
add_options_page(
'BOJ Settings',
'BOJ Settings',
'manage_options',
'boj_admin_settings',
'boj_admin_settings_page'
);
add_menu_page('My Plugin Settings Page', 
                'Menu Example Settings', 
                'manage_options', 
                __FILE__, 
                'boj_menuexample_settings_page',
                plugins_url( '/images/wp-icon.png', __FILE )
            );

}

function boj_menuexample_settings_page()
{
	
    global $wpdb;
    $resu = $wpdb->get_results("SELECT id,storageId,href,(timeout-timein)AS time,timein,timeout,os,mobile FROM wp_test");
    foreach ($resu as $key => $value) {
        print_r($value);echo "<hr>";
    }
}
    function select_test_function()
    {

    }

?>