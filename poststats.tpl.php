<?php 
/*
Template Name: Post Stats
*/ 

//used for Plugin::PressLine
?>
<?php get_header(); 
?>
<body <?php body_class( $class ); ?>>

<div id="content">
<?php tdwordcount_stats() ?>
</div>
<?php get_footer(); ?>
