<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    <?php do_action('myact'); ?>
  </head>

  <body>
  <script type="text/javascript">   
    jQuery(document).ready(function($) {
    $("#my").html();
    alert(123321);
    });
  </script>


  <a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
  <div id="my"></div>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>  <!-- bloginfo('url')网站地址 -->
          <a class="brand" href="<?php bloginfo('url') ?>">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
                <?php wp_list_pages(array('title_li' => '','exclude' => 31)); ?><!-- wp_list_pages(); page（后台页面列表） -->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">