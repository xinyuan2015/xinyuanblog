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
        		<div class="ds-share" data-thread-key="<?php the_ID();?>" data-title="<?php the_title();?>" data-images="此处请替换为分享时显示的图片的链接地址" data-content="<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 150,"..."); ?>" data-url="<?php the_permalink();?>">
                    <div class="ds-share-inline">
                      <ul  class="ds-share-icons-16">
                      	
                      	<li data-toggle="ds-share-icons-more"><a class="ds-more" href="javascript:void(0);">分享到：</a></li>
                        <li><a class="ds-weibo" href="javascript:void(0);" data-service="weibo">微博</a></li>
                        <li><a class="ds-qzone" href="javascript:void(0);" data-service="qzone">QQ空间</a></li>
                        <li><a class="ds-qqt" href="javascript:void(0);" data-service="qqt">腾讯微博</a></li>
                        <li><a class="ds-wechat" href="javascript:void(0);" data-service="wechat">微信</a></li>
                      	
                      </ul>
                      <div class="ds-share-icons-more">
                      </div>
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
            <!-- 多说评论框 start -->
            	<div class="ds-thread" data-thread-key="<?php the_ID();?>" data-title="<?php the_title();?>" data-url="<?php the_permalink();?>"></div>
            <!-- 多说评论框 end -->
            <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
            <script type="text/javascript">
            var duoshuoQuery = {short_name:"xinyuan20170215"};
            	(function() {
            		var ds = document.createElement('script');
            		ds.type = 'text/javascript';ds.async = true;
            		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
            		ds.charset = 'UTF-8';
            		(document.getElementsByTagName('head')[0] 
            		 || document.getElementsByTagName('body')[0]).appendChild(ds);
            	})();
            </script>
            <!-- 多说公共JS代码 end --> 
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

