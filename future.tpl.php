<?php
/*
Template Name: Future
*/
get_header();
?>
<div class="hfeed grid_16">
<h3>Future topics</h3>

I'm trying out <a href="http://sachachua.com/wp/2009/12/the-value-of-a-bottleneck/">limiting my blog to one post a day</a>, published between
8:00 AM to 9:00 AM ET. This usually results in a backlog of posts
I've already written and a long list of posts I'd like to write.

Here are the upcoming posts. This queue may change a lot depending on
what else happens, but it'll give you an idea of what else I'm
planning to write about. If you see something you're interested in, <a
href="http://sachachua.com/wp/contact">contact me</a> or <a
href="http://twitter.com/sachac">send me a message on Twitter</a> and
I'll see about nudging it forward in the queue.

<?php
$my_query = new WP_Query('post_status=future&posts_per_page=-1&order=ASC');
if ($my_query->have_posts()): ?>
<table class="future">
  <tr><th width="50">Date</th><th>Day</th><th>Title</th><th>Categories</th></tr>
<?php while ($my_query->have_posts()) :
  $my_query->the_post(); ?>
  <tr><td class="date"><?php the_time('M j') ?></td><td
    class="date"><?php the_time('D'); ?></td><td class="future_title"><?php the_title()
      ?></td><td><?php the_category(', ') ?></td></tr>
      <?php endwhile; ?>
      </table>
      <?php else: ?>
      Wow! No future posts.
      <?php endif; ?>
      <?php edit_post_link('Edit','<p>','</p>'); ?>
</div>
<?php get_footer() ?>

