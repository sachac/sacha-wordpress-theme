<?php get_header(); ?>
<div class="grid_11 content">
<div id="cse" style="width:100%;"></div>
    <div class="hfeed">
  <div class="navigation">
<?php if ($_REQUEST['order'] == 'asc') {
echo '<a href="' . add_query_arg('order', 'desc') . '">Change view to newest posts first (default)</a><br />';
 ?>
<span class="nav-left">
      <?php previous_posts_link('&laquo; Older posts'); ?>
    </span> 
- <span class="count">
<?php echo $wp_query->found_posts . ' total post(s)' ?>
</span><span class="nav-right">
      <?php next_posts_link('Newer posts &raquo;'); ?>
    </span>
<div style="clear: both"></div>
<?php } else {
echo '<a href="' . add_query_arg('order', 'asc') . '">Change view to oldest posts first</a><br />'; ?>
 <span class="nav-left">
      <?php next_posts_link('&laquo; Older posts'); ?>
    </span> - <span class="count">
<?php echo $wp_query->found_posts . ' total post(s)' ?>
</span><span class="nav-right">
      <?php previous_posts_link('Newer posts &raquo;'); ?>
    </span>
<div style="clear: both"></div>
<?php } // endif
?>
  </div>
<?php if (is_category()) {
if (category_description()) { 
echo '<div class="category-description">' . category_description() . '</div>';
} }?>

  <?php if(have_posts()): ?>
<p>On this page:
    <ul>
<?php while(have_posts()):the_post(); ?>
    <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="entry-summary-title"><?php the_title(); ?></a></li>
    <?php endwhile; rewind_posts(); ?>
    </ul></p>
<?php while(have_posts()):the_post();
 include('post.php'); ?>
  <?php endwhile; ?>

  <div class="navigation">
    <div class="left">
      <?php next_posts_link('&laquo; Older posts'); ?>
    </div><div class="right">	
      <?php previous_posts_link('Newer posts &raquo;'); ?>
    </div>
<div style="clear: both"></div>
  </div>

	<?php else: ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><?php _e('Not Found'); ?></h2>

		</div>

	<?php endif; ?>

</div>


<?php get_sidebar(); ?>
<?php get_footer() ?>

