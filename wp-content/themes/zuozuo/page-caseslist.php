<?php 
echo 'page-caseslist指定模板';



while(have_posts()){the_post();the_content();;the_title();}
get_sidebar();

 ?>