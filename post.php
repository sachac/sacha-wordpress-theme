
		<div class="post hentry">

			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="entry-title"><?php the_title(); ?></a></h2>

			<div class="postinfo">
<?php _e('Categories: '); the_category(', '); ?> <?php _e('Posted on'); ?> <span class="postdate"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:s\Z') ?>"><?php the_time('F jS, Y') ?></abbr></span> <?php _e('by'); ?> <?php the_author() ?> 

			</div>
			<div class="entry">
<div class="entry-content">
				<?php the_content("[Read more &rarr;]"); ?>

</div>
<?php the_meta(); ?>
<? if (function_exists('social_bookmark')) { social_bookmark(); } ?> 
- <a class="share-via-twitter" href="http://twitter.com/home?status=Reading: <?php the_title(); ?> <?php echo get_option('home'); ?>/p/<?php the_ID(); ?>" title="Tweet this post">Twitter</a>
 
				<p class="postmetadata">
<?php _e('More posts about:&#58;'); ?> <?php the_category(', ') ?>
<?php edit_post_link('Edit', ' &#124; ', ''); ?>
//
<strong><?php comments_popup_link('Add Comment &#187;', '1 Comment
                                                            &#187;',
                 '% Comments &#187;'); ?></strong>
				</p>

			</div>

		</div>
