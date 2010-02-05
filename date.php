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
  get_header(); ?>
<div class="grid_10 content push_2">
<div id="container">
<?php 
  $y = mysql2date('Y', $wp_query->posts[0]->post_date);
  $m = mysql2date('m', $wp_query->posts[0]->post_date);
  $d = mysql2date('d', $wp_query->posts[0]->post_date);
  $posts = query_posts($query_string . '&orderby=date&order=desc&posts_per_page=-1'); 
   
  $display = mktime(0, 0, 0, $m, $d, $y);
  if (is_year()) {
    $format = 'Y';
    $prev_display = mktime(23, 59, 59, 12, 31, $y - 1);
    $next_display = mktime(0, 0, 0, 1, 1, $y + 1);
    $url_format = 'Y';
  } elseif (is_month()) {
    $prev_display = mktime(23, 59, 59, $m, 0, $y);
    $next_display = mktime(0, 0, 0, $m + 1, 1, $y);
    $format = 'F Y';
    $url_format = 'Y/n';
  } elseif (is_day()) {
    $prev_display = mktime(23, 59, 59, $m, $d - 1, $y);
    $next_display = mktime(0, 0, 0, $m, $d + 1, $y);
    $format = 'F j, Y';
    $url_format = 'Y/n/j';
  }
  $paged = get_query_var('paged');
  if ($paged < 2) { // No previous pages; navigate by date instead
    $past = $wpdb->get_row("SELECT UNIX_TIMESTAMP(MAX(post_date)) AS post_date
FROM $tableposts WHERE post_date <= FROM_UNIXTIME($prev_display) AND post_status='publish'");
    if ($past->post_date) {
      $prev_text = '&laquo; ' . date($format, $past->post_date);
      $prev_link = get_bloginfo('url') . '/'
        . date($url_format, $past->post_date);
    }
  }
  if ($paged >= $wp_query->max_num_pages) { // No next pages
    $future = $wpdb->get_row("SELECT UNIX_TIMESTAMP(MIN(post_date)) AS post_date
FROM $tableposts WHERE post_date >= FROM_UNIXTIME($next_display) AND post_status='publish'");
    if ($future->post_date) {
      $next_text = date($format, $future->post_date) . ' &raquo;';
      $next_link = get_bloginfo('url') . '/'
        . date($url_format, $future->post_date);
    }
  }
  $title = date($format, $display);
  ?>
  <div class="navigation">
    <div class="left">
      <?php if ($prev_text) { ?>
        <a href="<?php print $prev_link ?>"><?php print $prev_text ?></a>
      <?php } else { ?>
        <?php previous_posts_link('&laquo; Older posts'); ?>
      <?php } ?>
    </div>
    <div class="right">
      <?php if ($next_text) { ?>
        <a href="<?php print $next_link ?>"><?php print $next_text ?></a>
      <?php } else { ?>
        <?php next_posts_link('Newer posts &raquo;'); ?>
      <?php } ?>
    </div>
    <div style="clear: both"></div>
  </div>
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
    <div class="left">
      <?php if ($prev_text) { ?>
        <a href="<?php print $prev_link ?>"><?php print $prev_text ?></a>
      <?php } else { ?>
        <?php previous_posts_link('&laquo; Older posts'); ?>
      <?php } ?>
    </div>
    <div class="right">
      <?php if ($next_text) { ?>
        <a href="<?php print $next_link ?>"><?php print $next_text ?></a>
      <?php } else { ?>
        <?php next_posts_link('Newer posts &raquo;'); ?>
      <?php } ?>
    </div>
    <div style="clear: both"></div>
  </div>
        </div>
<?php if (!$_GET['bulk']) {
?>

<?php get_sidebar(); ?>

<?php get_footer() ?>

</div></body>
</html> 
<?php } ?>
<?php } ?>
