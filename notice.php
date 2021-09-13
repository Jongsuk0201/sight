<h4>通知公告</h4>
<ul id="notice">
	<?php $display_categories = array(get_option('notice_cat')); foreach ($display_categories as $category) { ?>
		<?php query_posts("showposts=8&cat=$category")?>
			<?php while (have_posts()) : the_post(); ?>
			    <li>
			    	<a href="<?php the_permalink(); ?>" target="_blank">
			    		<?php echo mb_strimwidth(get_the_title(), 0, 46, '...'); ?>
			    	</a>
			    </li>
			<?php endwhile; ?>
			<a class="right more" href="<?php echo get_category_link($category);?>">
				查看更多&gt;&gt;
			</a>
		<?php wp_reset_query(); ?>
	<?php } ?>
</ul>