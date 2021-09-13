<?php   
//添加后台菜单项
add_action('admin_menu', 'theme_function');   
function theme_function(){
	// 别名为theme-setting,显示位置为3
    add_menu_page('主题选项', '主题设置', 'edit_themes', 'theme-setting', 'theme_setting_function', '', 3);
}

function theme_setting_function(){   
	?>
	<h2>Theme-WU主题设置</h2>
	<form method="post" action="options.php">   
		<p>
			<input name="index_cat1" size="10" placeholder="<?php echo get_option('index_cat1'); ?>"/>
			<label>（请输入首页第一区块的目录ID）</label>
		</p>
		<p>
			<input name="index_cat2" size="10" placeholder="<?php echo get_option('index_cat2'); ?>"/>
			<label>（请输入首页第二区块的目录ID）</label>
		</p>
		<p>
			<input name="notice_cat" size="10" placeholder="<?php echo get_option('notice_cat'); ?>"/>
			<label>（请输入公告小工具的目录ID）</label>   
		</p>
		<p>
			<input name="site_admin" size="10" placeholder="<?php echo get_option('site_admin'); ?>"/>
			<label>（请输入站点管理者名称）</label>   
		</p>
		<input type="submit" value="保存设置"/>
		
		<!-- 保存表单设置数据 -->
		<?php wp_nonce_field('update-options');?>
		<!-- 输出自带隐藏域(验证表单来源) -->
		<input type="hidden" name="action" value="update" />   
		<input type="hidden" name="page_options" value="index_cat1,index_cat2,notice_cat,site_admin" />
	</form>
	<?php
}
?>