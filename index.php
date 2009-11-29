<?php get_header(); ?>
<div id="container" class="hfeed">
		<div class="navigation">
<div class="left">
			<?php next_posts_link('&laquo; Older posts'); ?>
		</div><div class="right">	
			<?php previous_posts_link('Newer posts &raquo;'); ?>
</div>
		</div>

    <?php if(have_posts()): ?><?php while(have_posts()):the_post();
 include('post.php'); ?>
	<?php endwhile; ?>

		<div class="navigation">
<div class="left">
			<?php next_posts_link('&laquo; Older posts'); ?>
		</div><div class="right">	
			<?php previous_posts_link('Newer posts &raquo;'); ?>
</div>
		</div>

	<?php else: ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><?php _e('Not Found'); ?></h2>

		</div>

	<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer() ?>

</div></body>
</html>
