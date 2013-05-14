</div><!-- end of content area -->
<div class="grid_4 rightbar">
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
<div class="grid_2 leftbar">
   <ul>
<li class="widget">
<h2 class="widgettitle">Featured Categories</h2>
<ul class="featured_categories">
   <li class="cat_emacs"><a href="http://sachachua.com/blog/category/emacs"><span>Emacs</span></a></li>
   <li class="cat_books"><a href="http://sachachua.com/blog/category/visual-book-notes">Visual book notes</span></a></li>
   <li class="cat_blogging"><a href="http://sachachua.com/blog/category/blogging">Blogging</span></a></li>
   <li class="cat_sketches"><a href="http://sachachua.com/blog/category/sketches"><span>Sketches</span></a></li>
   <li class="cat_geek"><a href="http://sachachua.com/blog/category/geek"><span>Geek</span></a></li>
   <li class="cat_life"><a href="http://sachachua.com/blog/category/life"><span>Life</span></a></li>
   <li class="cat_outsourcing"><a href="http://sachachua.com/blog/category/delegation"><span>Delegation</span></a></li>
   <li class="cat_speaking"><a href="http://sachachua.com/blog/category/presentation"><span>Presenting</span></a></li>
   <li class="cat_connecting"><a href="http://sachachua.com/blog/category/networking"><span>Social networking</span></a></li>
   <li class="cat_drupal"><a href="http://sachachua.com/blog/category/drupal"><span>Drupal</span></a></li>
   <li class="cat_weekly"><a href="http://sachachua.com/blog/category/weekly"><span>Weekly reports</span></a></li>
</ul></li>
<div class="widget">
<h2>Get the highlights as a PDF!</h2>
<a href="http://www.lulu.com/shop/sacha-chua/stories-from-my-twenties-highlights-of-a-decade-of-blogging/ebook/product-20223728.html"><img width="100" src="/blog/wp-content/themes/sacha-v3/images/stories-from-my-twenties.png" alt="Stories from my Twenties: Highlights from a Decade of Blogging" /></a>
</div>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2))
    ; ?>
</div>
<div class="clear"></div>

<!-- End Sidebar -->
