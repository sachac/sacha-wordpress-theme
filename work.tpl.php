<?php
/*
Template Name: Work
*/
get_header(); ?>
<div class="hfeed columns large-12">
<?php while (have_posts()) {
  the_post();
  print '<h1>';
  the_title();
  print '</h1>';
  edit_post_link('Edit', '', ''); 
  print '<div class="content">';
  the_content();
  print '</div>';
} ?>
<div class="contact">
<h2>Contact information</h2>

Sacha Chua<br />
<a href="mailto:business@sachachua.com">business@sachachua.com</a><br />
<a href="http://linkedin.com/in/sachac">linkedin.com/in/sachac</a>, <a href="http://twitter.com/sachac">twitter.com/sachac</a><br />
2100 Bloor Street West, Suite #6-175, Toronto, ON M6S 5A5 Canada<br />
+1-647-547-9436<br />
</div>
</div>
<?php get_footer() ?>

