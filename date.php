<?php 

  $y = mysql2date('Y', $wp_query->posts[0]->post_date);
  $m = mysql2date('m', $wp_query->posts[0]->post_date);
  $d = mysql2date('d', $wp_query->posts[0]->post_date);
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
  $prev_text = date($url_format, $prev_display);
  $next_text = date($url_format, $next_display);
  $prev_link = site_url($prev_text);
  $next_link = site_url($next_text);
  $paged = get_query_var('paged');
  $title = date($format, $display);
$last_month = null;
if ($_GET['bulk']) { 
$posts = query_posts($query_string . '&orderby=date&order=asc&posts_per_page=-1'); ?>
<html><head><link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /><title><?php print $title ?></title><body>
<div class="bulk">
<h1 class="bulk_title"><?php print $title ?></h1>
<?php if (have_posts()) {
   // Print regular, for export
?>
<ul>
<?php
	 while(have_posts()) { the_post(); ?>
<li><a href="#post-<?php the_ID(); ?>"><?php the_title(); ?></a></li>
         <?php } ?>
</ul>
<?php 
         rewind_posts();
while(have_posts()) { the_post();
  if (is_year() && get_the_time('F Y') != $last_month) {
    print '<h1 class="month">' . get_the_time('F Y') . '</h1>';
    $last_month = get_the_time('F Y');
  }
  ?>
    
         <h2 class="title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="permalink"><a href="<?php echo get_option('home'); ?>/p/<?php the_ID(); ?>"><?php echo get_option('home'); ?>/p/<?php the_ID(); ?></a></div>
         <div class="date"><?php the_time('F j, Y') ?> - Categories: <?php the_category(', ') ?></div>
         <div class="body">
            <?php the_content() ?>
         </div>
<?php }} ?>
</div></body></html>
<?php
}
else if ($_GET['list']) {
$posts = query_posts($query_string . '&orderby=date&order=asc&posts_per_page=-1'); 
print '<ul>';
	 while(have_posts()) { the_post(); ?>
         <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></li>
<?php
}
print "</ul>"; 
}
else if ($_GET['org']) {
$posts = query_posts($query_string . '&orderby=date&order=asc&posts_per_page=-1'); 
print '<pre>';
	 while(have_posts()) { the_post(); ?>
- [[<?php the_permalink(); ?>][<?php the_title(); ?>]]
<?php
}
print '</pre>';
}
else if ($_GET['table']) {
$posts = query_posts($query_string . '&orderby=date&order=asc&posts_per_page=-1'); 
print '<table>';
	 while(have_posts()) { the_post(); ?>
<tr><td><?php the_ID(); ?></td><td><?php the_title(); ?></td><td><?php the_permalink(); ?></td><td><?php echo strlen(get_the_content()); ?></td><td><?php the_time("Y-n-j G:i"); ?></td></tr>
<?php
}
print '</table>';
}
else { 
  get_header(); ?>
<div class="grid_11 content">
<div id="container">
<div id="cse" style="width:100%;"></div>
<?php 
  $posts = query_posts($query_string . '&orderby=date&order=desc&posts_per_page=-1'); 
  ?>
  <div class="navigation">
    <div class="left">
      <?php if ($prev_text) { ?>
        &laquo; <a href="<?php print $prev_link ?>"><?php print $prev_text ?></a>
      <?php } else { ?>
        <?php previous_posts_link('&laquo; Older posts'); ?>
      <?php } ?>
    </div>
    <div class="right">
      <?php if ($next_text) { ?>
        <a href="<?php print $next_link ?>"><?php print $next_text ?></a> &raquo;
      <?php } else { ?>
        <?php next_posts_link('Newer posts &raquo;'); ?>
      <?php } ?>
    </div>
    <div style="clear: both"></div>
  </div>
  <h1><?php print $title ?></h1>
<p><a href="<?php print modify_url(array('bulk' => 1)); ?>">Bulk view</a></p>

<?php if (is_day()) {
	$year = $wp_query->query_vars['year'];
	$month = $wp_query->query_vars['monthnum'];
	$day = $wp_query->query_vars['day'];
  }?>
	<?php if(have_posts()): ?>
            <?php if (is_day()) {
      while (have_posts()) { the_post(); include 'post.php'; } } else { ?>
<table class="spaced">
<tr><th width="80">Date</th><th>Title</th><th>Comments</th><th>Categories</th></tr>
	<?php while(have_posts()):the_post(); ?>

			<tr><td><?php the_time('M j') ?></td><td><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></td>
<td class="number"><?php comments_number('', '1', '%'); ?></td>
<td><?php the_category(', ') ?></td></tr>

	<?php endwhile; ?>
                                                                                                                                                            </table>
                                                                                                                                                                <?php } ?>

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
