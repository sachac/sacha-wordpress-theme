<?php if ($_REQUEST['dump']) { 
  remove_all_filters('the_content');
  while (have_posts()): the_post(); ?>
  <div class="post">
  <h2><?php the_title() ?></h2>
  <span class="date"><?php the_time('F jS, Y') ?></span>
  <span class="perm">- <a class="permalink" href="<?php echo get_option('home'); ?>/p/<?php the_ID(); ?>"><?php echo get_option('home'); ?>/p/<?php the_ID(); ?></a></span>
  <div class="entry"><?php the_content() ?></div>
  </div>
<?php 
  endwhile;
  exit;
} ?>
<?php get_header(); ?> 
<div class="grid_11 content">
<div id="container">
<div id="cse" style="width:100%;"></div>
		<div class="navigation">
			<?php previous_post_link('&laquo; Older: %link') ?><br /><?php next_post_link('Newer: %link &raquo;') ?>
		</div>
	<?php if(have_posts()): ?><?php while(have_posts()):the_post(); ?>

		<div class="post">

			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

				<div class="postinfo">
<?php _e('Posted on'); ?> <span class="postdate"><?php the_time('F jS, Y') ?></span> <?php _e('by'); ?> <?php the_author() ?>
				</div>

			<div class="entry">

				<?php the_content(); ?>

<? if (function_exists('the_ratings')) {
the_ratings(); } ?>


<script src="http://feeds.feedburner.com/~s/sachac?i=<?php the_permalink() ?>" type="text/javascript" charset="utf-8"></script>
				<?php link_pages('<p><strong>Pages:</strong>','</p>','number'); ?>

				<p class="postmetadata">
<?php _e('More posts about:'); ?> <?php the_category(', ') ?> <?php the_tags(); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?> // <strong><?php comments_popup_link('Add Comment &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></strong> 				
				</p>
                            Short URL: <a href="http://sach.ac/p/<?php the_ID(); ?>">sach.ac/p/<?php the_ID(); ?></a>

			</div>

				<div class="comments-template">
					<?php comments_template(); ?>
				</div>

		</div>

	<?php endwhile; ?>

		<div class="navigation">
			<?php previous_post_link('&laquo; Older: %link') ?><br /><?php next_post_link('Newer: %link &raquo;') ?>

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
