<?php
/**
 * Xinyuan 小工具函数加载与操作
 *
 * @author      Xinyuan
 */

// 加载小工具组件
include( WIDGETSPATH . 'xinyuan-widget-category.php' );
include( WIDGETSPATH . 'xinyuan-widget-archive.php' );
include( WIDGETSPATH . 'xinyuan-widget-tags.php' );
include( WIDGETSPATH . 'xinyuan-widget-links.php' );

// 注销系统默认小工具
add_action( 'widgets_init', 'Xinyuan_deregister_widgets' );

// 注册自定义小工具侧边栏
add_action( 'widgets_init', 'Xinyuan_register_sidebar' );

/**
 * 系统默认小工具注销
 *
 * @since xinyuan 1.0.0
 * @return void
 */
function Xinyuan_deregister_widgets() {
	unregister_widget( 'WP_Widget_Archives' );   
    //unregister_widget( 'WP_Widget_Calendar' );   
    unregister_widget( 'WP_Widget_Categories' );   
    //unregister_widget( 'WP_Widget_Links' );   
    //unregister_widget( 'WP_Widget_Meta' );   
    //unregister_widget( 'WP_Widget_Pages' );   
    //unregister_widget( 'WP_Widget_Recent_Comments' );   
    //unregister_widget( 'WP_Widget_Recent_Posts' );   
    //unregister_widget( 'WP_Widget_RSS' );   
    unregister_widget( 'WP_Widget_Search' );   
    //unregister_widget( 'WP_Widget_Tag_Cloud' );   
    //unregister_widget( 'WP_Widget_Text' );   
    //unregister_widget( 'WP_Nav_Menu_Widget' );   
}

/**
 * 注册自定义小工具侧边栏
 *
 * @since xinyuan 1.0.0
 * @return void
 */
function Xinyuan_register_sidebar() {
	if( function_exists( 'register_sidebar' ) ) {
		
		register_sidebar( array(
		  'name'          => 'Home_Sidebar',
		  'description'   => '首页侧边栏',
		  'before_widget' => '',
          'after_widget'  => ''
		) );
		
	}
}
?>