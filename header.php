<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
<title>    
<?php if ( is_home() ) {bloginfo('name');}    
elseif ( is_category() ) {single_cat_title(); echo " 丨 "; bloginfo('name');}       
elseif (is_single() || is_page() ) {single_post_title(); echo " 丨 "; bloginfo('name');}      
elseif (is_search() ) {echo "搜索结果"; echo " 丨 "; bloginfo('name');}       
elseif (is_404() ) {echo '页面未找到!';}       
else {wp_title('',true);} ?> 
</title>
<?php $options=get_option('f_options'); ?>
<meta name="keywords" content="<?php if(is_single()){echo $keywords;}else bloginfo('name');?>" />
<meta name="author" content="新元">
<meta name="description" content="<?php if(is_single()){echo $description;}else echo bloginfo('description'); ?>" />
<meta property="og:type" content="article">
<meta property="og:title" content="<?php bloginfo('name');?>">
<meta property="og:url" content="<?php bloginfo('url');?>">
<meta property="og:site_name" content="<?php if(is_single()){echo $keywords;}else bloginfo('name');?>">
<meta property="og:description" content="<?php if(is_single()){echo $description;}else echo bloginfo('description'); ?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?php if(is_single()){echo $keywords;}else bloginfo('name');?>">
<meta name="twitter:description" content="<?php if(is_single()){echo $description;}else echo bloginfo('description'); ?>">
<link rel="alternative" href="<?php bloginfo('atom_url'); ?>" title="<?php if(is_single()){echo $keywords;}else bloginfo('name');?>" type="application/atom+xml">
<link rel="icon" href="<?php bloginfo("template_url"); ?>/assets/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php bloginfo("template_url"); ?>/assets/images/logo.png">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo("template_url"); ?>/assets/images/logo.png">
<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/style.css" />
<link rel="shortcut icon" href="<?php bloginfo("template_url"); ?>/assets/images/favicon.ico" type="image/x-icon" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" />
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?377a10e542d7bb148390082b19a2b2e2";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<header>
    <div>
        <div id="logo">
            <a href="#">
                <img src="<?php bloginfo("template_url"); ?>/assets/images/logo.png" alt="新元的博客" title="新元的博客">
            </a>
        </div>
        <div id="textlogo">
            <h1 class="site-name">
                <a href="<?php bloginfo('url');?>">
                    <?php bloginfo('name');?>
                </a>
            </h1>
            <h2 class="blog-motto">
                <?php bloginfo('description');?>
            </h2>
        </div>
        <div class="navbar">
            <a class="navbutton navmobile" hred="#" title="菜单"></a>   
        </div>
        <nav class="animated">
            <ul>
                <li>
                    <a href="<?php bloginfo('url');?>">首页</a>
                </li>
                <li>
                    <a href="#">关于</a>
                </li>
                <li>
                    <form class="search" action="<?php bloginfo('home'); ?>" accept-charset="utf-8">
                        <label>Search</label>
                        <input type="search" id="search" name="s" id="s" autocomplete="off" maxlength="20" placeholder="搜索" value="<?php echo wp_specialchars($s, 1); ?>"/>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</header>