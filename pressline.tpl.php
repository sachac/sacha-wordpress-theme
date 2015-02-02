<?php 
/*
Template Name: PressLine
*/ 

//used for Plugin::PressLine
?>
<?php get_header(); ?>
<body <?php body_class( $class ); ?> onload="PressLineonLoad();">

<div id="content">
<h3 class="storytitle"><?php bloginfo('name'); ?> &raquo; PressLine</h3>

<?php 
if (function_exists('timeline_show')) timeline_show('550');
?>

<?php get_footer(); ?>