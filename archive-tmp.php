<?php get_header(); ?>

<div id="container">
		<div class="navigation">
<div class="left">
			<?php next_posts_link('&laquo; Older posts'); ?>
		</div><div class="right">	
			<?php previous_posts_link('Newer posts &raquo;'); ?>
</div>
		</div>
<?php if (is_day()) {
	$year = $wp_query->query_vars['year'];
	$month = $wp_query->query_vars['monthnum'];
	$day = $wp_query->query_vars['day'];
	}?>
	<?php if(have_posts()): ?>
	
	<?php while(have_posts()):the_post(); ?>

		<div class="post">

			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="postinfo">
<?php _e('Categories: '); the_category(', '); ?> <?php _e('Posted on'); ?> <span class="postdate"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:s\Z') ?>"><?php the_time('F jS, Y') ?></abbr></span> <?php _e('by'); ?> <?php the_author() ?> 

			</div>

			<div class="entry">

				<?php the_content("[Read more &rarr;]"); ?>
<script src="http://feeds.feedburner.com/~s/sachac?i=<?php the_permalink() ?>" type="text/javascript" charset="utf-8"></script>


				<p class="postmetadata">
<?php _e('Tags&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
				</p>

			</div>

		</div>

	<?php endwhile; ?>

		<div class="postnav">
			<?php posts_nav_link(); ?>
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
