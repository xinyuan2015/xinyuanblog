<?php get_header();?>

<div id="container">
    <div id="main" class="post">
    
        <?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?>
        <article itemprop="articleBody" id="post-<?php the_ID();?>">
            <header class="article-info clearfix">
        		<h1 itemprop="name"><a href="<?php the_permalink();?>" title="<?php the_title();?>" itemprop="url"><?php the_title();?></a></h1>
        		<p class="article-author">
        			By <a href="<?php the_permalink();?>" title="<?php the_author();?>" target="_blank" itemprop="author"><?php the_author();?></a>
        		</p>
        		<p class="article-time">
        			<time datetime="<?php the_time('Y-m-d') ?>" itemprop="datePublished"> 发表于<?php the_time('Y-m-d') ?></time>
        		</p>
    		</header>
    		<div class="article-content">
    			<p>
    				<?php the_content()?>
    			</p>
    		</div>
    		<footer class="article-footer clearfix">
        		<div class="article-catetags">
        			<div class="article-categories">
        				<span></span><?php the_category(); ?>
        			</div>
        			<div class="article-tags">
        				<span></span><?php the_tags("","","");?>
        			</div>
        		</div>
    		</footer>
		</article>
    	<?php endwhile; ?>
    	<nav class="article-nav clearfix">
    	    <div class="prev">
    	        <?php if (get_next_post()) { next_post_link("%link","<strong>上一篇：</strong><br><span>%title</span>");} ?>
			</div>
			<div class="next">
				<?php if (get_previous_post()) { previous_post_link("%link","<strong>下一篇：</strong><br><span>%title</span>");} ?>
			</div>
		</nav>
        <section id="comments" class="comment">
			<!--PC和WAP自适应版-->
			<div id="SOHUCS" sid="<?php the_ID();?>" ></div> 
			<script type="text/javascript"> 
			(function(){ 
			var appid = 'cyt36R9yu'; 
			var conf = 'prod_c404bbbb0b7be3f7b03f2f736121b6e9'; 
			var width = window.innerWidth || document.documentElement.clientWidth; 
			if (width < 960) { 
			window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("https://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>
        </section>
        <?php else: ?>
        <div class="post">
            <h2><?php _e('404 NOT FOUND');?></h2>
        </div>
        <?php endif; ?>
    </div>
    
    <?php get_sidebar();?>
    
</div>
    

<?php get_footer();?>

    <script type="text/javascript">var cacman_var = {};cacman_var.is_post=true;cacman_var.post_page_photo=true;cacman_var.duoshuo_shortname="<?php echo DUOSHUO; ?>";cacman_var.post_toc_aside=true;</script>
    <script type="text/javascript">cacman_var.post_page_photo_fancybox=true;</script>
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/assets/fancybox/jquery.fancybox.css" media="screen" type="text/css">
	<script src="<?php bloginfo("template_url"); ?>/assets/fancybox/jquery.fancybox.pack.js"></script>
    <script src="<?php bloginfo("template_url"); ?>/assets/js/main.js"></script>
</body>
</html>

