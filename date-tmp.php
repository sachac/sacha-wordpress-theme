<?php if ($_GET['bulk']) { 
$posts = query_posts($query_string . '&orderby=date&order=asc&posts_per_page=1000'); 
if (have_posts()) {
   // Print regular, for export
?>
<?php
	 while(have_posts()) { the_post(); ?>
         <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <div class="permalink"><?php the_permalink(); ?></div>
         <div class="date"><?php the_time('F j, Y') ?> - Categories: <?php the_category(', ') ?></div>
         <div class="body">
            <?php the_content() ?>
         </div>
<?php } 
}
}
else { 
  get_header();
  ?>

<?php
                   $posts = query_posts($query_string . '&orderby=date&order=desc&posts_per_page=-1')
                   ;
?>
<div id="container">
    <div class="navigation">
<div class="left"><?php print $prev_text ?></div>
<div class="right"><a href="<?php print $next_link ?>"><?php print $next_text ?></a></div>
                           </div>
   <div style="clear: both"></div>
   <h1><?php print $title ?></h1>
<?php if (is_day()) {
	$year = $wp_query->query_vars['year'];
	$month = $wp_query->query_vars['monthnum'];
	$day = $wp_query->query_vars['day'];
	}?>
	<?php if(have_posts()): ?>
<table>
<tr><th width="50">Date</th><th>Title</th><th>Categories</th></tr>
	<?php while(have_posts()):the_post(); ?>

			<tr><td><?php the_time('M j') ?></td><td><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></td><td><?php the_category(', ') ?></td></tr>

	<?php endwhile; ?>
</table>

		<div class="postnav">
			<?php posts_nav_link(); ?>
		</div>

	<?php else: ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><?php _e('Not Found'); ?></h2>

		</div>

	<?php endif; ?>
    <div class="navigation">
<div class="left"><a href="<?php print $previous_link ?>"><?php print $previous_text ?></a></div>
<div class="right"><a href="<?php print $next_link ?>"><?php print $next_text ?></a></div>
                           </div>
   <div style="clear: both"></div>

</div>
<?php if (!$_GET['bulk']) {
?>

<?php get_sidebar(); ?>

<?php get_footer() ?>

</div></body>
</html> 
<?php } ?>
<?php } ?>
