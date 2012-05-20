
		<div class="post hentry">

			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="entry-title"><?php the_title(); ?></a></h2>

			<div class="postinfo">
<?php _e('Categories: '); the_category(', '); ?> <?php _e('Posted on'); ?> <span class="postdate"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:s\Z') ?>"><?php the_time('F jS, Y') ?></abbr></span> <?php _e('by'); ?> <?php the_author() ?> 

			</div>
			<div class="entry">
<div class="entry-content">
				<?php the_content("[Read more &rarr;]"); ?>

</div>
<? if (function_exists('the_ratings')) { 
the_ratings(); } ?> 
 
<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:450px; height:60px"></iframe><br />
                            Short URL: <a href="<?php echo get_option('home'); ?>/p/<?php the_ID(); ?>"><?php echo get_option('home'); ?>/p/<?php the_ID(); ?></a>

				<p class="postmetadata">
<?php _e('More posts about:'); ?> <?php the_category(', ') ?>
<?php edit_post_link('Edit', ' &#124; ', ''); ?>
<strong><?php comments_popup_link('Add Comment &#187;', '1 Comment
                                                            &#187;',
                 '% Comments &#187;'); ?></strong>
				</p>

			</div>

		</div>
