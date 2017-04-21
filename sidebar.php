<div class="openaside">
	<a class="navbutton" href="#" title="显示侧边栏"></a>
</div>
<div id="asidepart">
	<div class="closeaside">
		<a class="closebutton" href="#" title="隐藏侧边栏"></a>
	</div>
	<aside class="clearfix">
	   <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('Home_Sidebar')) : ?>
    	<!-- <div class="weiboshow">
    		<p class="asidetitle">
    			新浪微博
    		</p>
    		<iframe width="100%" height="550" class="share_self" frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=550&fansRow=2&ptype=1&speed=0&skin=1&isTitle=1&noborder=1&isWeibo=1&isFans=1&uid=1195294274&verifier=efeae95f&dpc=1">
    		</iframe>
    	</div> -->
        <div class="rsspart">
    		<a href="<?php bloginfo('atom_url'); ?>" target="_blank" title="rss">RSS 订阅</a>
    	</div>
	<?php endif; ?>
	</aside>
	
</div>