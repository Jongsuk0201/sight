<!--页首区:调用header.php-->
<?php get_header(); ?>

<!--主体区-->
<main id="index">
	<!--正文区-->
	<article>
		<!--幻灯片区-->
		<section class="slider">
			<ul>
				<!-- 限定文章 -->
	     		<?php query_posts($query_string . 'tag=top'.'&showposts=' . $limit=7)?>    
				<!-- 筛选文章 -->
	    		<?php while ( have_posts() ) : the_post();?>
				<li>
					<div class="slider-thumb">
		                <a href="<?php the_permalink();?>" target="_blank">
		                	<?php if ( has_post_thumbnail() ) { ?>
								<?php the_post_thumbnail('medium')?>  
							<?php } else {?>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/images/thumb.png"/>
							<?php } ?>
		                </a>
					</div>
	            	<div class="slide-preview">  
	              		<h2>
	              			<a href="<?php the_permalink(); ?>"  target="_blank">
	              				<?php echo mb_strimwidth(get_the_title(), 0, 50, '...'); ?>
	              			</a>
	              		</h2>
	                    <p class="slide-summary">
							<?php echo mb_strimwidth(strip_tags(get_the_content()), 0, 160,"..."); ?>
	                    </p>
	                    <a class="more" href="<?php the_permalink(); ?>">查看详情</a>
	            	</div>  
	            </li>
	            <?php endwhile; wp_reset_query(); ?>   
			</ul>
			<div class="pre"><</div>
			<div class="next">></div>
		</section>
		<!--内容区-->
		<section class="grid">
			<!--区块1-->
			<div class="left">
				<!-- 调用后台主题设置的目录ID -->
				<?php $display_categories = array(get_option('index_cat1')); foreach ($display_categories as $category) { ?>
					<?php query_posts("showposts=7&cat=$category")?>
						<!-- 分类目录名称 -->
						<div class="grid-name">
							<a href="<?php echo get_category_link($category);?>">
								<?php single_cat_title(); ?>
							</a>
						</div>
						<ul>
						<?php while (have_posts()) : the_post(); ?>
						    <li>
								<a href="<?php the_permalink(); ?>" target="_blank">
						    		<!--文章缩略图-->
									<div class="thumb">
										<?php if ( has_post_thumbnail() ) { ?>
											<?php the_post_thumbnail(); ?>  
										<?php } else {?>
											<img src="<?php echo get_stylesheet_directory_uri() ?>/images/thumb.png"/>
										<?php } ?>
									</div>
						    		<!--文章预览-->
						    		<div class="preview">
							    		<div class="title">
							    			<?php echo mb_strimwidth(get_the_title(), 0, 95); ?>
							    		</div>
							    		<div class="time"><?php the_time('Y-n-j') ?></div>
							    		<div class="summary">
							    			<?php echo mb_strimwidth(strip_tags(get_the_content()), 0, 190); ?>
							    		</div>
						    		</div>
								</a>	
							</li>
						<?php endwhile; ?>
						</ul>
						<!--更多内容-->
						<a class="more" href="<?php echo get_category_link($category);?>">
							查看更多&gt;&gt;
						</a>
					<?php wp_reset_query(); ?>
				<?php } ?>
			</div>
				
			<!--区块2-->
			<div class="right">
				<?php $display_categories = array(get_option('index_cat2')); foreach ($display_categories as $category) { ?>
					<?php query_posts("showposts=7&cat=$category")?>
						<div class="grid-name">
							<a href="<?php echo get_category_link($category);?>">
								<?php single_cat_title(); ?>
							</a>
						</div>
						<ul>
						<?php while (have_posts()) : the_post(); ?>
						    <li>
								<a href="<?php the_permalink(); ?>" target="_blank">
									<div class="thumb">
										<?php if ( has_post_thumbnail() ) { ?>
											<?php the_post_thumbnail(); ?>  
										<?php } else {?>
											<img src="<?php echo get_stylesheet_directory_uri() ?>/images/thumb.png"/>
										<?php } ?>
									</div>
							    	<div class="preview">
							    		<div class="title">
							    			<?php echo mb_strimwidth(get_the_title(), 0, 95); ?>
							    		</div>
							    		<div class="time"><?php the_time('Y-n-j') ?></div>
							    		<div class="summary">
							    			<?php echo mb_strimwidth(strip_tags(get_the_content()), 0, 190); ?>
							    		</div>
						    		</div>
								</a>	
							</li>
						<?php endwhile; ?>
						</ul>
						<a class="more" href="<?php echo get_category_link($category);?>">
							查看更多&gt;&gt;
						</a>
					<?php wp_reset_query(); ?>
				<?php } ?>
			</div>
		</section>
	</article>
	
	<!-- 侧边栏 -->
	<?php get_sidebar(); ?>
</main>
	
<!--页脚区:调用footer.php-->
<?php get_footer(); ?>