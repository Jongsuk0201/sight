<!--页首区-->
<?php get_header(); ?>
	
<!--主体区-->
<main id="page">
	<!--正文区-->
	<article>
		<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
			<!--文章标题-->
			<h3 class="title">
				<?php the_title(); ?>
			</h3>
			<div class="content">
				<!--加载文章内容-->
				<div class="content">
					<?php the_content(); ?>
				</div>
					
				<!--操作按钮-->
				<p>
					<!--返回首页按钮-->
					<a href="<?php echo get_option('home'); ?>" class="button" >
						&lt;&lt; 返回首页
					</a>
					<!--发表评论按钮-->
					<a href="#commentform" class="button right" >
						发表评论
					</a>
				</p>
				<!--加载评论-->
				<?php comments_template(); ?>
			</div>
		<?php else : ?>
			<div class="content">
				没有找到你想要的页面！
			</div>
		<?php endif; ?>
	</article>
	
	<!-- 侧边栏 -->
	<?php get_sidebar(); ?>
</main>	

<!--页脚区-->
<?php get_footer(); ?>