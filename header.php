<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<!--可为不同页面显示不同标题：-->		
		<title>
			<?php
			// 主页显示
			if (is_home()) {
				// 网站名称(主标题)
				bloginfo("name");
				echo " - ";
				// 网站描述(副标题)
				bloginfo("description");
			// 分类目录显示
			} elseif (is_category()) {
				single_cat_title();
			// 文章页或页面显示
			} elseif (is_single() || is_page()) {
				single_post_title();
			}
			?>
 		</title>
 		
 		<!--网标-->
		<link rel="shortcut icon" type="image/ico" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon.ico" />

		<!--引入CSS-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		
		<?php wp_head(); ?>		<!--输出头部信息供调用-->
	</head>
		
	<body>
		<header>
			<div id="site-title">
				<!-- 主标题 -->
				<h1 id="logo">
					<!-- 链接到主页 -->
					<a href="<?php echo get_option('home'); ?>">
						<!-- 网站名称 -->
						<?php bloginfo('name'); ?>
					</a>
				</h1>
				<!-- 副标题 -->
				<h2 id="caption">
					<!-- 网站描述 -->
					<?php bloginfo('description'); ?>
				</h2>
			</div>
			<!--导航菜单-->
			<nav>
				<!-- 调用注册的菜单 -->
				<?php wp_nav_menu(array(
					// 菜单别名指向
					'theme_location' => 'nav-top',
					// 自定义ul父节点div的id值
					'container_id' => 'top-menu-box',
					// 自定义ul节点的id值
					'menu_id' => 'top-menu',
					//菜单深度
					'depth' => 1
				));?>
			</nav>
		</header>	