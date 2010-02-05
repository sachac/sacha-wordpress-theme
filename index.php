<?php get_header(); ?>
<div class="grid_10 content push_2">
    <div class="hfeed">
  <div class="navigation">
    <div class="left">
      <?php next_posts_link('&laquo; Older posts'); ?>
    </div><div class="right">	
      <?php previous_posts_link('Newer posts &raquo;'); ?>
    </div>
<div style="clear: both"></div>
  </div>
  <?php if(have_posts()): ?>
<p>On this page:
    <ul>
<?php while(have_posts()):the_post(); ?>
    <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="entry-summary-title"><?php the_title(); ?></a></li>
    <?php endwhile; rewind_posts(); ?>
    </ul></p>
<?php while(have_posts()):the_post();
 include('post.php'); ?>
  <?php endwhile; ?>

  <div class="navigation">
    <div class="left">
      <?php next_posts_link('&laquo; Older posts'); ?>
    </div><div class="right">	
      <?php previous_posts_link('Newer posts &raquo;'); ?>
    </div>
<div style="clear: both"></div>
  </div>

	<?php else: ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><?php _e('Not Found'); ?></h2>

		</div>

	<?php endif; ?>

</div>


<?php get_sidebar(); ?>
<?php get_footer() ?>

