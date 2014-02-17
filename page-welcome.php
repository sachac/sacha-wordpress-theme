<?php 
/* Template Name: Welcome page */
include('base-header.php'); ?>
<div class="row">
<div class="large-8 columns content">
<div id="cse" style="width:100%;"></div>
    <div class="hfeed">
    <?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>
       <div class="entry">
       <?php if ('open' == $post->comment_status): ?>
       <strong><?php comments_popup_link('Add Comment &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></strong> 	
       <?php endif; ?>
				<?php the_content(); ?>
				<?php link_pages('<p><strong>Pages:</strong>','</p>'); ?>
				<?php edit_post_link('Edit','<p>','</p>'); ?>
       </div>
			
				<div class="comments-template">
					<?php comments_template(); ?>
				</div>

  <?php endwhile; ?>
<div style="clear: both"></div>
	<?php else: ?>
		<div class="page" id="page-<?php the_ID(); ?>">
			<h2><?php _e('Not Found'); ?></h2>

		</div>

	<?php endif; ?>

</div><!--hfeed-->
</div><!--content-->
<?php get_sidebar() ?>
<?php get_footer() ?>
