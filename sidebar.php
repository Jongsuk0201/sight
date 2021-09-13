<!--侧边栏-->
<aside>
	<!--显示主页侧边栏中小工具，若未设置则显示自定义小工具-->
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('主页侧边栏') ) : ?>
        <h4>自定义小工具</h4>
        <ul>
        	<li>自定义小工具</li>
        </ul>
    <?php endif; ?>
</aside>