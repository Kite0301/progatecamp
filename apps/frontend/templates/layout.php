<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include_partial('global/fb_opg') ?>
<?php include_http_metas() ?>
<?php include_metas() ?>

<?php include_title() ?>

<link rel="shortcut icon" href="/favicon.ico" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

</head>

<body>


	<div id="contents">
		<div class="header">
			<div class="header-container">
				<div class="header-logo theme-color">
					<h1>PROGATE CAMP</h1>
				</div>
				<div class="header-navi">
          <ul class="navi-item">
            <!-- ログイン時 -->
          <?php if ($sf_user->isAuthenticated()) : ?>
          	<li><?php echo link_to('Tasks', '@task_list') ?></li>
            <li><?php echo link_to('Users', '@user_list') ?></li>
            <li><?php echo link_to('Sign Out', '@logout') ?></li>

          <!-- 未ログイン時 -->
          <?php else : ?>
            <li><?php echo link_to('Sign In', '@login') ?></li>
          <?php endif; ?>
        </div>

	<?php include_partial('global/google_analytics') ?>
			</div>
		</div>


		<main>
			<?php echo $sf_data->getRaw('sf_content') ?>
		</main>

		<footer id="top-footer">
			<div class="row">
				<div class="top-footer-title">PROGATE CAMP</div>
				<div class="top-like-box">
					<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;width=380&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=false&amp;height=80&amp;appId=296639803850370" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:380px; height:80px;" allowTransparency="true"></iframe>
				</div>
				<nav class="top-footer-menu">
					<div class="footer-menu-item">© 2014 Progate</div>
				</nav>
			</div>
		</footer>
	</div>

</body>
</html>
