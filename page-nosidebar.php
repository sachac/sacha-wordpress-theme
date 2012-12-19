<?php 
/* Template Name: No Sidebar */
get_header(); ?>
<div class="grid_16 content">
<div id="cse" style="width:100%;"></div>
    <div class="hfeed">
    <?php if(have_posts()): ?>
    <?php while(have_posts()):the_post(); ?>
       <div class="entry">
       <h2><?php the_title() ?></h2>
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
<?php get_footer() ?>
