<!--页首区-->
<?php get_header(); ?>

<!--主体区-->
<main id="archive">
	<!--正文区-->
	<article>
		<!--内容区-->
		<section>
			<!--筛选文章-->
			<?php if (have_posts()) : 
				while (have_posts()) : the_post(); ?>
					<div class="post">
						<a href="<?php the_permalink(); ?>" target="_blank">
							<!--文章标题-->
							<h3 class="title">
								<!--输出带文章链接的标题-->
								<?php the_title(); ?>
							</h3>
							<hr/>
							<!--文章简介-->
							<div class="post-info">
								<!--文章缩略图-->
								<div class="thumb">
									<?php if ( has_post_thumbnail() ) { ?>
										<?php the_post_thumbnail(); ?>  
									<?php } else {?>
										<img src="<?php echo get_stylesheet_directory_uri() ?>/images/thumb.png"/>
									<?php } ?>
								</div>
								<div class="post-preview">
									<!--文章摘要-->
									<div class="summary">
										<?php echo mb_strimwidth(strip_tags(get_the_content()), 0, 320,"..."); ?>
									</div>
									<!--文章信息-->
									<p class="sub">
										<?php the_tags('标签：', ', ', ''); ?>
										&bull; 发布时间：<?php the_time('Y年n月j日') ?> 
										&bull; 评论数：<?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?>
										<!--添加编辑按钮-->
										<?php edit_post_link('编辑', ' &bull; ', ''); ?>
									</p>
								</div>
								<!--加载全文按钮-->
								<p>
									<a href="<?php the_permalink(); ?>" class="button">阅读全文</a>
								</p>
							</div>
						</a>
					</div>
					<hr/>
				<?php endwhile; ?>
			<?php else : ?>
		        <h3 class="title">未找到</h3>
		        <p>没有找到任何文章！</p>
		    <?php endif; ?>
		</section>
		
		<!--翻页按钮-->
		<section class="flip">
			<span class="left">
				<?php previous_posts_link('&lt;&lt; 查看前一页', 0); ?> 
			</span>
			<span class="right">
				<?php next_posts_link('查看后一页 &gt;&gt;', 0); ?>
			</span>
		</section>
	</article>
	
	<!-- 侧边栏 -->
	<?php get_sidebar(); ?>
</main>
	
<!--页脚区-->
<?php get_footer(); ?>