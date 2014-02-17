<?php get_header(); ?>
<?php
if ($_REQUEST['posts'] && is_numeric($_REQUEST['posts'])) {
  global $query_string;
  query_posts($query_string . '&posts_per_page=' . $_REQUEST['posts']);
# } else {
# query_posts($query_string . '&posts_per_page=3');
} ?>

<div class="grid_11 content">
  <div id="cse" style="width:100%;"></div>
    <div class="hfeed">
      <div class="navigation">
         <span class="nav-left"><?php previous_posts_link('&laquo; Previous posts'); ?></span> 
         <span class="count"><?php echo $wp_query->found_posts . ' total post(s)' ?></span>
         <span class="nav-right"><?php next_posts_link('Next posts &raquo;'); ?></span>
      </div>
      <div style="clear: both"></div>

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
<div class="posts">
<?php while(have_posts()):the_post();
 include('post.php'); ?>
  <?php endwhile; ?>
</div>
  <div class="navigation">
         <span class="nav-left"><?php previous_posts_link('&laquo; Previous posts'); ?></span> 
         <span class="count"><?php echo $wp_query->found_posts . ' total post(s)' ?></span>
         <span class="nav-right"><?php next_posts_link('Next posts &raquo;'); ?></span>
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

