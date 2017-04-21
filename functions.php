<?php
/**
 * Functions 整体函数调用
 *
 */
// 自定义theme路径
define( 'THEMEPATH', TEMPLATEPATH . '/' );

// 自定义includes路径
define( 'INCLUDESEPATH', THEMEPATH . 'includes/' );

// 自定义widgets路径
define( 'WIDGETSPATH', INCLUDESEPATH . 'widgets/' );

//环境切换,个人配置
define('DEVELOPMENT',false);//true--开发环境,false--正式环境

if(DEVELOPMENT == true){
    // 多说ID
    define( 'DUOSHUO', 'xinyuan20170215' );
}else{
    // 多说ID
    define( 'DUOSHUO', 'xinyuan20170215' );
}

// 加载主题函数文件
require_once( INCLUDESEPATH . 'theme-functions.php' );

// 加载小工具文件
require_once( WIDGETSPATH . 'widgets.php' );

?>