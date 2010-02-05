<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<div class="grid_16">
<?php include 'searchform.php' ?>
</div>
<div class="clear"></div>
<div class="grid_5">
<h2>Archives by month</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
</div><div class="grid_5">
<h2>Archives by category</h2>
	<ul>
		 <?php wp_list_categories('show_count=1&show_last_update=1'); ?>
	</ul>
</div><div class="grid_6">
<h2>Featured categories</h2>
	<ul>
		 <?php wp_list_categories('show_count=1&include=493,6,33,151,8,433,138,459,5,234,513&show_last_update=1'); ?>
	</ul>
</div>

<?php get_footer(); ?>
