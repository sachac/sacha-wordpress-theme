<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<div class="small-6 large-4 columns">
  <h2>Archives by category</h2>
  <ul><?php wp_list_categories('show_count=1&show_last_update=1&title_li='); ?></ul>
</div>
<div class="small-6 large-4 columns">
  <h2>Tags</h2>
  <?php wp_tag_cloud('smallest=8&largest=22&exclude=678&number=100') ?>
  <p><a href="/blog/tag/highlight">Highlighted posts</a></p>
</div>
<div class="small-6 large-4 columns">
  <h2>Archives by month</h2>
  <ul><?php wp_get_archives('type=monthly'); ?></ul>
</div>

<?php get_footer(); ?>
