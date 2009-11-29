<?php get_header(); ?>

<div id="container">

		<div class="navigation">
			<?php previous_post_link('&laquo; %link') ?> - <?php next_post_link('%link &raquo;') ?>
		</div>
	<?php if(have_posts()): ?><?php while(have_posts()):the_post(); ?>

		<div class="post">

			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

				<div class="postinfo">
<?php _e('Posted on'); ?> <span class="postdate"><?php the_time('F jS, Y') ?></span> <?php _e('by'); ?> <?php the_author() ?>
				</div>

			<div class="entry">

				<?php the_content(); ?>
<?php the_meta(); ?>


<script src="http://feeds.feedburner.com/~s/sachac?i=<?php the_permalink() ?>" type="text/javascript" charset="utf-8"></script>
<? if (function_exists('social_bookmark')) { social_bookmark(); } ?> 
- <a class="share-via-twitter" href="http://twitter.com/home?status=Reading: <?php the_title(); ?> <?php echo get_option('home'); ?>/p/<?php the_ID(); ?>" title="Tweet this post">Twitter</a>

				<?php link_pages('<p><strong>Pages:</strong>','</p>','number'); ?>

				<p class="postmetadata">
<?php _e('More posts about...&#58;'); ?> <?php the_category(', ') ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?> // <strong><?php comments_popup_link('Add Comment &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></strong> 				
				</p>

			</div>

			
				<div class="comments-template">
					<?php comments_template(); ?>
				</div>

		</div>

	<?php endwhile; ?>

		<div class="navigation">
			<?php previous_post_link('&laquo; %link') ?> -  <?php next_post_link('%link &raquo;') ?>

			<h2>Related posts</h2>
<?php similar_posts(); ?>
</div>

	<?php else: ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><?php _e('Not Found'); ?></h2>

		</div>

	<?php endif; ?>
<h2>On This Day...</h2>
<?php OTDList() ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer() ?>

</div></body>
</html>
