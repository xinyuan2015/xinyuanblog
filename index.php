<?php get_header();?>
    
<div id="container">
    <div id="main">
    
        <?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?>
        <article class="post-expand post" itemprop="articleBody" id="post-<?php the_ID();?>">
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
    				<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 150,"..."); ?><br>
    			</p>
    			<figure class="thumbnail"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'full' ); ?></a></figure>
    			<p class="article-more-link">
    				<a href="<?php the_permalink();?>">阅读更多</a>
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
    		<div class="comments-count">
    			<span></span><a href="<?php the_permalink() ?>" data-count-type="comments">&nbsp;&nbsp;&nbsp;&nbsp;<?php comments_number( '暂无评论', '1条评论', '%条评论' ); ?></a>
    		</div>
    		</footer>
		</article>
    	<?php endwhile; ?>
    	<nav id="page-nav" class="clearfix">
            <?php par_pagenavi(9); ?>
        </nav>
        <?php else: ?>
        <div class="post">
            <h2><?php _e('404 NOT FOUND');?></h2>
        </div>
        <?php endif; ?>
        
        
    </div>
    
    <?php get_sidebar();?>
    
</div>
        
    
<?php get_footer();?>

    <script type=text/javascript>var cacman_var = {};cacman_var.duoshuo_shortname="<?php echo DUOSHUO;?>";</script>
    <script src="<?php bloginfo("template_url"); ?>/assets/js/main.js"></script>
</body>
</html>