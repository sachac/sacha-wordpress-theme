</div><!-- end of content area -->
<div class="grid_5 rightbar nocontent robots-noindex">
<!--googleoff: index-->
<ul>
    <li><?php get_search_form(true); ?></li>
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
