<!-- Start leftbar -->

<!-- Start Rightbar -->

<div class="rightbar">
   <ul>
   <li class="widget">
<a href="http://feeds.feedburner.com/sachac"><img src="http://feeds.feedburner.com/~fc/sachac?bg=&amp;fg=&amp;anim=&amp;label=readers" height="26" width="88" style="border:0" alt="" /></a> 
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/subscribe.png" height="20" alt="Subscribe! " style="margin-left: 10px; margin-right: 5px"/>
   <a href="http://sachachua.com/wp/subscribe"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/email.png" height="20" style="margin-left: 5px; margin-right: 5px" alt="E-mail" border="0" /></a>
   <a href="http://feeds.feedburner.com/sachac"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss-icon.png" height="20" alt="Feed reader" border="0" /></a>


   </li>
<li class="widget">
<h2 class="widgettitle">Featured Categories</h2>
<ul>
   <li><a href="http://sachachua.com/wp/category/work">Work</a></li>
   <li><a href="http://sachachua.com/wp/category/life">Life</a></li>
   <li><a href="http://sachachua.com/wp/category/sketches">Sketches</a></li>
   <li><a href="http://sachachua.com/wp/category/va">Delegating</a></li>
   <li><a href="http://sachachua.com/wp/category/presentation">Presenting</a></li>
   <li><a href="http://sachachua.com/wp/category/networking">Social networking</a></li>
   <li><a href="http://sachachua.com/wp/category/web2.0">Web 2.0</a></li>
   <li><a href="http://sachachua.com/wp/category/emacs">Emacs</a></li>
   <li><a href="http://sachachua.com/wp/category/drupal">Drupal</a></li>
   <li><a href="http://sachachua.com/wp/category/book">Books I'm reading</a></li>
<li><a href="http://sachachua.com/wp/category/weekly">Weekly reports</a></li>
</ul></li>
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
	</div>

<!-- End Sidebar -->
