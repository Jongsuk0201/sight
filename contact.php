<?php
/*
Template Name: 关于
*/ 
?>

<!--页首区-->
<?php get_header(); ?>
	
<!--主体区-->
<main id="contact">
	<!--正文区-->
	<article>	
		<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
			<!--加载文章-->
			<div class="post">
				<!--文章标题-->
				<h3 class="title">
					<?php the_title(); ?>
				</h3>
				<hr class="dot"/>
				<!--加载文章内容-->
				<div class="content">
					<?php the_content(); ?>
				</div>
				<!--操作按钮-->
				<p class="post-buttons">
					<!--返回首页按钮-->
					<a href="<?php echo get_option('home'); ?>" class="button" >
						&lt;&lt; 返回首页
					</a>
					<!--发表评论按钮-->
					<a href="#commentform" class="button" >
						发表评论
					</a>
				</p>
			</div>
			<hr class="dot"/>
			<!--加载评论-->
			<?php comments_template(); ?>
		<?php else : ?>
			<div class="content">
				没有找到你想要的页面！
			</div>
		<?php endif; ?>
	</article>
	
	<!--边栏区-->
	<aside class="info">
		<h4>地址和手机</h4>
		<ul>
			<li> 
				<b>单位地址：</b>
				安徽省 合肥市 包河区 <br />
				马鞍山路 绿地大厦<br />
			</li>
			<li>座机：0551 - 63410100</li>
			<li>手机：15105511234</li>
		</ul>
		
		<h4>邮箱</h4>
		<ul>
			<li>咨询 - <a href="mailto:12345@qq.com">12345@qq.com</a></li>
			<li>售后 - <a href="mailto:45678@qq.com">45678@qq.com</a></li>
		</ul>
		
		<h4>社交账号</h4>
		<ul>
			<li class="im">
				<a href="#">
					<img alt="" src="<?php echo get_stylesheet_directory_uri() ?>/images/weibo.png" title="微博" />
				</a>
			</li>
			<li class="im">
				<a href="#">
					<img alt="" src="<?php echo get_stylesheet_directory_uri() ?>/images/weixin.png" title="微信" />
				</a>
			</li>
			<li class="im">
				<a href="#">
					<img alt="" src="<?php echo get_stylesheet_directory_uri() ?>/images/qq.png" title="QQ" />
				</a>
			</li>
		</ul>
	</aside>
</main>

<!--页脚区-->
<?php get_footer(); ?>