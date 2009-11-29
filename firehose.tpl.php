<?php 
/*
Template Name: Firehose
*/ 

//used for Plugin::PressLine
?>
<?php get_header();
?>
<style type="text/css">
.goals { border: 1pt solid gray; padding: 10px; }
.daily { width: 45%; float: left; }
.weekly { width: 45%; float: right; }
.clear { clear: both; }
.mainposts { width: 45%; float: left; }
.mainposts LI { margin-bottom: 6pt; }
.firehose { width: 45%; float: right }
.wrapper { clear: both }
.box { padding: 5px; border: 1pt solid gray; margin-bottom: 10px; }
.box .categories { text-align: right; font-size: x-small }
</style>
<div class="goals">
<div class="daily">
<?php
$posts = query_posts('orderby=date&order=desc&posts_per_page=3&cat=551');
$first = 1;
while(have_posts()) {
  the_post();
  if ($first) {
    $first = 0;
    echo '<h2>';
    the_time('l, F j, Y');
    echo '</h2>';
    edit_post_link('Edit', '', ''); 

    the_content("[Read more &rarr;]");
  } else {
  ?>
  <li><a href="<?php the_permalink(); ?>" title="<?php the_time('l, F j, Y') ?>" class="entry-title"><?php the_time('l, F j, Y') ?></a></li>
<? }
      }?>
      <a href="http://sachachua.com/wp/daily">Other daily plans</a>...
</div>
<div class="weekly">
<h2>Weekly</h2>
<ul>
<?php
$posts = query_posts('orderby=date&order=desc&posts_per_page=5&cat=5');
while(have_posts()) {
  the_post(); ?>
      <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="entry-title"><?php the_title(); ?></a></li>
<? } ?>
	  </ul>
<a href="http://sachachua.com/wp/category/weekly">Other weekly reviews</a>...
</div>
	  	  <div class="clear"></div>
	  </div>
	  <div class="clear"></div>
	  <div class="wrapper">
<div class="mainposts">
<?php
	  $posts = query_posts('orderby=date&order=desc&posts_per_page=20&cat=-550');
$first = 1;
if(have_posts()): ?>
	  <h1>Blog Posts</h1>
<?php while(have_posts()) {
  the_post(); 
  if ($first) {
	  print '<div class="box">';
    include('post.php');
    $first = 0;
	  	  print '</div>';
    print '<ul>';
  } else { ?>
    <li><strong><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="entry-title"><?php the_title(); ?></a></strong><br />
	<abbr class="published" title="<?php the_time('Y-m-d\TH:i:s\Z') ?>"><?php the_time('F jS, Y') ?></abbr> <?php the_category(', '); ?></li>
<?php  }
} ?>
	</ul>
	<?php endif; ?>

</div>
<div class="firehose">
	<h1>Tidbits</h1>
<?php $posts = query_posts('orderby=date&order=desc&posts_per_page=5&cat=550'); ?>
<?php if(have_posts()): ?><?php while(have_posts()):the_post(); ?>
<div class="box">
	<?php the_content("[Read more &rarr;]"); ?>
<div class="categories">
<?php the_time('l, F j, Y'); ?> - 
	<?php the_category(', ') ?> -
	<?php comments_popup_link('Add comment', '1 Comment', '% Comments'); ?>
	</div>
	<div class="clear"></div>
	</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
	</div>
<?php get_footer(); ?>
