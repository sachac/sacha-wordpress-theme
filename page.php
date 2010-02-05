<?php get_header(); ?>
<div class="grid_10 content push_2">
    <div class="hfeed">
  <?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
<div class="entry">
    <h2><?php the_title() ?></h2>
				<?php the_content(); ?>
				<?php link_pages('<p><strong>Pages:</strong>','</p>'); ?>
				<?php edit_post_link('Edit','<p>','</p>'); ?>
			</div>

  <?php endwhile; ?>
<div style="clear: both"></div>
	<?php else: ?>
		<div class="page" id="page-<?php the_ID(); ?>">
			<h2><?php _e('Not Found'); ?></h2>

		</div>

	<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer() ?>
