<?php
//主题自定义页面
include_once('theme-setting.php');  

//显示主题缩略图
add_theme_support('post-thumbnails');
set_post_thumbnail_size(320,320,false);

//注册菜单栏
register_nav_menus(array(
	'nav-top' => '顶部导航'
));

//注册侧边栏
register_sidebar(array(
	'name' => '主页侧边栏',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h4>',
	'after_title' => '</h4>'
));
register_sidebar(array(
	'name' => '文章侧边栏',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h4>',
	'after_title' => '</h4>'
));

//标签云参数
function custom_tag_cloud_args( $args ){
	$newargs = array(
		'smallest'    => 1.2,
		'largest'     => 1.2,
		'unit'        => 'vw',
		'number'      => 45,
		'orderby'     => 'count',//排序规则，name或count
		'order'       => 'DESC',//升序或降序，ASC或DESC
		'exclude'     => '10'//排除标签ID
	);
	$return = array_merge( $args, $newargs);
	return $return;
}
add_filter( 'widget_tag_cloud_args', 'custom_tag_cloud_args' );

//注册小工具
register_sidebar_widget('通知公告','notice');   
function notice() {
	include(TEMPLATEPATH . '/notice.php'); 
}   

//切回原版小工具编辑器
function example_theme_support() {
	remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'example_theme_support' );

?>