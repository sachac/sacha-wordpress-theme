</div><!-- end of content area -->
<div class="grid_2 pull_10 leftbar">
   <ul>
<li class="widget">
<h2 class="widgettitle">Featured Categories</h2>
<ul class="featured_categories">
   <li class="cat_work"><a href="http://sachachua.com/wp/category/work"><span>Work</span></a></li>
   <li class="cat_geek"><a href="http://sachachua.com/wp/category/geek"><span>Geek</span></a></li>
   <li class="cat_life"><a href="http://sachachua.com/wp/category/life"><span>Life</span></a></li>
   <li class="cat_sketches"><a href="http://sachachua.com/wp/category/sketches"><span>Sketches</span></a></li>
   <li class="cat_outsourcing"><a href="http://sachachua.com/wp/category/va"><span>Outsourcing</span></a></li>
   <li class="cat_speaking"><a href="http://sachachua.com/wp/category/presentation"><span>Presenting</span></a></li>
   <li class="cat_connecting"><a href="http://sachachua.com/wp/category/networking"><span>Social networking</span></a></li>
   <li class="cat_emacs"><a href="http://sachachua.com/wp/category/emacs"><span>Emacs</span></a></li>
   <li class="cat_drupal"><a href="http://sachachua.com/wp/category/drupal"><span>Drupal</span></a></li>
   <li class="cat_weekly"><a href="http://sachachua.com/wp/category/weekly"><span>Weekly reports</span></a></li>
</ul></li>




	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1))
    ; ?>
</div>
<div class="grid_4 rightbar">
<ul>
    <li><?php include('searchform.php'); ?></li>
    <li><a href="http://sachachua.com/wp/2009/12/what-can-i-help-you-learn-looking-for-mentees/">What can I help you learn?</a></li>
<li><h2>Recent Sketches</h2>
<ul class="sketch_thumbnail">
<?php 
query_posts('showposts=12&cat=433');
$i = 0;
while (have_posts() && $i < 4): the_post(); 
$x = get_the_image(array('echo' => false, 'image_scan' => true,
'custom_key' => array('Thumbnail', 'thumbnail'), 'default_size' => 'thumbnail', 'width' => 100, 'height' => 100));
if ($x && strpos($x, 'zemanta') === FALSE) {
  print '<li ' . (($i % 2 != 0) ? ' style="margin-left: 20px"' : '') . '>' . $x . '</li>';
  $i++;
 }
endwhile;
?>
</ul>

</li>
<?php if (function_exists('clb_plus')) { clb_plus(); } ?>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2)) : else : ?>

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

</div><div class="clear"></div>

<!-- End Sidebar -->
