</div><!-- end of content area -->
<div class="grid_5 rightbar nocontent robots-noindex">
<!--googleoff: index-->
<ul>
    <li><?php get_search_form(true); ?></li>
    <li><a href="http://sachachua.com/blog/2009/12/what-can-i-help-you-learn-looking-for-mentees/">What can I help you learn?</a></li>
    <li><a href="http://dl.dropbox.com/u/3968124/learning.html">Want to help me with what I'm learning?</a></li>
<?php
if (function_exists('get_the_image')) { ?> 
<li><h2>Recent Sketches</h2>
<ul class="sketch_thumbnail">
<?php 
$posts = get_posts('showposts=4&cat=433');
$i = 0;
foreach ($posts as $post) {
setup_postdata($post);
$x = get_the_image(array('echo' => false, 'image_scan' => true,
'custom_key' => array('Thumbnail', 'thumbnail'), 'default_size' => 'thumbnail', 'width' => 100, 'height' => 100));
if ($x && strpos($x, 'zemanta') === FALSE) {
  print '<li ' . (($i % 2 != 0) ? ' style="margin-left: 20px"' : '') . '>' . $x . '</li>';
  $i++;
 }
}
?>
</ul>

</li>
<?php } // get_the_image ?>
<?php if (function_exists('clb_plus')) { clb_plus(); } ?>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1)) : else : ?>

	<li><h2><?php _e('Categories'); ?></h2>
		<ul>
			<?php wp_list_cats('sort_column=name'); ?>
		</ul>
	</li>

	

	<li><h2><?php _e('Archives'); ?></h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		

		<li><h2><?php _e('Meta'); ?></h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</li>

	

<?php endif; ?>

</ul>

</div>

<!-- End Sidebar -->
