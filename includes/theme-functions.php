<?php
/**
 * Theme-Functions 主要函数
 *
 */

if ( function_exists( 'register_nav_menus' ) )
    register_nav_menus();

// 隐藏admin bar
add_filter( 'show_admin_bar', '__return_false' );

// 设定后台特色图像
if ( function_exists( 'add_theme_support' ) )
    add_theme_support( 'post-thumbnails' );

// 开启链接管理（包括友情链接）
add_filter('pre_option_link_manager_enabled','__return_true');

//分页
function par_pagenavi($range = 9){
    if ( is_singular() ) return;
    global $wp_query, $paged;
    $max_page = $wp_query->max_num_pages;
    if ( $max_page == 1 ) return;
    if ( empty( $paged ) ) $paged = 1;
    echo '<span class="page-numbers">第' . $paged .'页 （共' . $max_page .'页） </span> ';
    global $paged, $wp_query;
    if ( !$max_page ) {
        $max_page = $wp_query->max_num_pages;
    }
    if($max_page > 1){
        if(!$paged){
            $paged = 1;
        }
        if($paged != 1){
            echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> 首页 </a>";
        }
        previous_posts_link(' « ');
        if($max_page > $range){
            if($paged < $range){
                for($i = 1; $i <= ($range + 1); $i++){
                    echo "<a href='" . get_pagenum_link($i) ."'";
                    if($i==$paged)
                        echo " class='current'";
                    echo ">$i</a>";
                }
            }elseif($paged >= ($max_page - ceil(($range/2)))){
                for($i = $max_page - $range; $i <= $max_page; $i++){
                    echo "<a href='" . get_pagenum_link($i) ."'";
                    if($i==$paged)
                        echo " class='current'";
                    echo ">$i</a>";
                }
            }elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
                for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){
                    echo "<a href='" . get_pagenum_link($i) ."'";
                    if($i==$paged)
                        echo " class='current'";
                    echo ">$i</a>";
                }
            }
        }else{
            for($i = 1; $i <= $max_page; $i++){
                echo "<a href='" . get_pagenum_link($i) ."'";
                if($i==$paged)
                    echo " class='current'";
                echo ">$i</a>";
            }
        }
        next_posts_link(' » ');
        if($paged != $max_page){
            echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'> 尾页 </a>";
        }
    }
}

//边栏彩色标签
function colorCloud($text) {
    $text = preg_replace_callback('|<a (.+?)>|i','colorCloudCallback', $text);
    return $text;
}
function colorCloudCallback($matches) {
    $text = $matches[1];
    $color = dechex(rand(0,16777215));
    $pattern = '/style=(\'|\”)(.*)(\'|\”)/i';
    $text = preg_replace($pattern, "style=\"color:#{$color};$2;\"", $text);
    return "<a $text>";
}
add_filter('wp_tag_cloud', 'colorCloud', 1);


/*禁用后台google字体*/
add_filter('gettext_with_context', 'disable_open_sans', 888, 4);

function disable_open_sans($translations, $text, $context, $domain) {
    if('Open Sans font: on or off' == $context && 'on' == $text) {
        $translations = 'off';
    }
    return $translations;
}

?>