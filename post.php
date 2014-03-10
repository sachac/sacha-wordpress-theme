
		<div class="post hentry" id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="entry-title"><?php the_title(); ?></a></h2>

			<div class="postinfo">
<span class="postdate"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:s\Z') ?>"><?php the_time('F jS, Y') ?></abbr></span> <?php the_author() ?>  <?php _e('Categories: '); the_category(', '); ?> <?php the_tags(); ?> 

<?php 
   	   $themeurl = get_stylesheet_directory_uri(); 
   	   $anchor_svg = 'anchor-svg';
   	   $comment_link = "<object data ='".$themeurl."/images/comment.svg'><img class='anchor-png' src ='".$themeurl."/images/comment.png' /></object>"; 
	 comments_popup_link($comment_link, '1&nbsp;'.$comment_link ,
                 '% '.$comment_link,$anchor_svg); ?>

			</div>
			<div class="entry">
<div class="entry-content">
				<?php the_content("[Read more &rarr;]"); ?>

</div>
<? if (function_exists('the_ratings')) { 
the_ratings(); } ?> 
 
				<p class="postmetadata">
                            Short URL: <a href="http://sach.ac/p/<?php the_ID(); ?>">sach.ac/p/<?php the_ID(); ?></a><br />
<?php _e('Categories: '); the_category(', '); ?> <?php the_tags(); ?> 
<?php edit_post_link('Edit', ' &#124; ', ''); ?>
<strong><?php comments_popup_link('Add Comment &#187;', '1 Comment
                                                            &#187;',
                 '% Comments &#187;'); ?></strong>
				</p>

			</div>

		</div>
<div id="respond"></div>
