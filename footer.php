<!--页脚区-->
		<footer>
			<span>
				版权所有 &copy; 
				<!-- 输出年份 -->
				<?php echo date("Y")?> 
				<b><?php bloginfo('name'); ?></b>
					
				Design By 
				<!-- 网站管理员(主题设置) -->
				<b><?php echo get_option('site_admin');?></b>
				
				使用<b>Theme-Wu</b>主题
			</span>
		</footer>
		<?php wp_footer(); ?> 	<!--输出尾部信息供调用-->
			
		<script src="<?php echo get_stylesheet_directory_uri() ?>/Theme-Wu.js"></script>
	</body>
</html>
