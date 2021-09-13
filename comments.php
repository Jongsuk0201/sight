<!--评论区-->
<h3>留言评论</h3>

<!--查看评论-->
<ol class="commentlist">
	<?php if (!empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { ?>
        <!--若已输入密码但与cookie不符-->
	    <li><p><a href="#addcomment">请输入密码再查看评论内容.</a></p></li>
    <?php } else if ( !comments_open() ) { ?>
	    <li><p><a href="#addcomment">评论功能已经关闭!</a></p></li>
    <?php } else if ( !have_comments() ) { ?>
	    <li><p><a href="#addcomment">还没有任何评论，你来说两句吧</a></p></li>
    <?php } else {
		//输出评论
        wp_list_comments();
    } ?>
</ol>

<!--提交评论-->
<?php if ( !comments_open() ) :
elseif ( get_option("comment_registration") && !is_user_logged_in() ) : ?>
	<!--is_user_logged_in()判断用户是否登录-->
	<p>你必须 <a href="<?php echo wp_login_url( get_permalink() ); ?>">登录</a> 才能发表评论.</p>
	<!--wp_login_url()博客登录地址-->
<?php else : ?>
	<?php comment_form(); ?>
	<!--提交评论表单-->
<?php endif; ?>