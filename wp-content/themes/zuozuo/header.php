<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
        <title>呼叫中心系统及呼叫中心解决方案-云牛</title>
        
        <link rel="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/shortcut icon" href="favicon.ico">
        

        <script src="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/js/ie-emulation-modes-warning.js"></script>

        <link href="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/css/custom.css" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/css/portal.css" >
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/zuozuo/css/production_gather.css" >
        

 	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css"> 

     <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <?php wp_head(); ?>
    <!-- footer 引入本地js -->
    </head>
    <body>
        <div id="header"><!-- style="background: url('images/header.png') left 0;"-->
            <div class="container">
                <div style="float: right;margin-top: 5px;color: #90908b;margin-right: 15px;">
                    <!-- <span>销售咨询 <a href="tel:02196999725">021-96999725</a></span>&nbsp;&nbsp;<span>|</span>&nbsp;&nbsp;<span> -->售后服务 <a href="tel:4008217363">400 821 7363</a></span>
                </div>
            </div>
            <div class="container">
                <nav class="navbar navbar-default" style="border: 1px solid transparent;background-color: #ffffff;margin-bottom: 0px;">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                            <a href="javascript:;"><img src="wp-content/themes/zuozuo/images/logo.png" style="width:260px;height:70px;margin-top:-15px;" alt="云牛呼叫中心"></a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <?php    
    $defaults = array(   
    'menu_class'      => 'nav navbar-nav',   
    'menu_id'         => 'myNavigation',   
    'echo'            => true,   
    'fallback_cb'     => 'wp_page_menu',   
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',   
    'depth'           => 2,   
    'walker'          =>new dw_walker()
	);   
	
       
     wp_nav_menu( array(  
  'depth' => 2,   
  'container' => false,   
         'menu_class' => 'nav navbar-nav', 
    'menu_id'         => 'myNavigation',  
  'fallback_cb' => 'wp_page_menu',   
  //添加或更改walker参数   
  'walker' => new wp_bootstrap_navwalker())   
      );   
?>

                            <div class="button nav navbar-nav navbar-right" style="margin-top:10px;">
                                <a href="javascript:;" class="btn btn-warning" style="width: 90px;border-radius:80px;" rel="nofollow">免费试用</a>
                                <a href="free" target="_blank" class="btn btn-default" style="width: 65px;color: #8a8a8a;border-color: #aaa591;border-radius:80px;" rel="nofollow">登录</a>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>  
