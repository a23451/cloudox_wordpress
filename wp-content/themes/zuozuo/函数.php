Header 部分常用到的 PHP 函数

<?php bloginfo('name'); ?>: 博客名称 (Title)
<?php bloginfo('stylesheet_url'); ?>: CSS 文件路径
<?php bloginfo('pingback_url'); ?>: PingBack Url
<?php bloginfo('template_url'); ?>: 模板文件路径
<?php bloginfo('version'); ?>: WordPress 版本
<?php bloginfo('atom_url'); ?>: Atom Url
<?php bloginfo('rss2_url'); ?>: RSS 2.o Url
<?php bloginfo('url'); ?>: 博客 Url
<?php bloginfo('html_type'); ?>: 博客网页 Html 类型
<?php bloginfo('charset'); ?>: 博客网页编码
<?php bloginfo('description'); ?>: 博客描述
<?php wp_title(); ?> : 特定内容页 (Post/Page) 的标题
 

模板常用的 PHP 函数及命令

<?php get_header(); ?>: 调用 Header 模板
<?php get_sidebar(); ?>: 调用 Sidebar 模板
<?php get_footer(); ?>: 调用 Footer 模板
<?php the_content(); ?>: 显示内容 (Post/Page)
<?php if(have_posts()) : ?>: 检查是否存在 Post/Page
<?php while(have_posts()) : the_post(); ?>: 如果存在 Post/Page 则予以显示
<?php endwhile; ?>: While 结束
<?php endif; ?>: If 结束
<?php the_time('字符串') ?> : 显示时间，时间格式由“字符串”参数决定，具体参考PHP 手册
<?php comments_popup_link(); ?>: 正文中的留言链接。如果使用 comments_popup_script() ，则留言会在新窗口中打开，反之，则在当前窗口打开
<?php the_title(); ?>: 内容页 (Post/Page) 标题
<?php the_permalink() ?>: 内容页 (Post/Page) Url
<?php the_category(', ‘) ?>: 特定内容页 (Post/Page) 所属 Category
<?php the_author(); ?>: 作者
<?php the_ID(); ?>: 特定内容页 (Post/Page) ID
<?php edit_post_link(); ?>: 如果用户已登录并具有权限，显示编辑链接
<?php get_links_list(); ?>: 显示 Blogroll 中的链接
<?php comments_template(); ?>: 调用留言 / 回复模板
<?php wp_list_pages(); ?>: 显示 Page 列表
<?php wp_list_categories(); ?>: 显示 Categories 列表
<?php next_post_link(' %link ‘); ?>: 下一篇文章链接
<?php previous_post_link('%link'); ?>: 上一篇文章链接
<?php get_calendar(); ?>: 日历
<?php wp_get_archives() ?>: 显示内容存档
<?php posts_nav_link(); ?>: 导航，显示上一篇 / 下一篇文章链接
<?php include(TEMPLATEPATH . ‘/ 文件名'); ?> : 嵌入其他文件，可为定制的模板或其他类型文件
 

与模板相关的其他函数

<?php _e('Message'); ?>: 输出相应信息
<?php wp_register(); ?>: 显示注册链接
<?php wp_loginout(); ?>: 显示登录 / 注销链接
<!–next page–>: 将当前内容分页
<!–more–>: 将当前内容截断，以不在主页 / 目录页显示全部内容
<?php timer_stop(1); ?>: 网页加载时间 (秒)
<?php echo get_num_queries(); ?> : 网页加载查询量