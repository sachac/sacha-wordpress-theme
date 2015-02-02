<?php 
/*
Template Name: SparkLine
*/ 

//used for Plugin::PressLine
?>
<?php get_header(); 

$posts = query_posts('orderby=date&order=desc&posts_per_page=100');
  
?>
<body <?php body_class( $class ); ?>>

<div id="content">
<h3 class="storytitle"><?php bloginfo('name'); ?> &raquo; SparkLine</h3>

<?php
$s = "";
while (have_posts()):the_post();
  $s = $s ? ($s . ',' . mtw_wordcount()) : ('' . mtw_wordcount());
endwhile;
print sparkline_insert('bar', 'auto', 100, 1, $s, 1);
?>
<?php get_footer(); ?>
