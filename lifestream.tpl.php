<?php 
/*
Template Name: Lifestream
*/ 

//used for Plugin::PressLine
?>
<?php get_header(); ?>
<div class="grid_10 content">
    <div class="hfeed">
  <?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
<div class="entry">
    <h2><?php the_title() ?></h2>
	<ul>
        <?php
        $options = array('date interval' => 'two weeks');
        $events = $lifestream->get_events($options);
        foreach ($events as $event)
        {
            echo '<li>';
            $label_inst = $event->get_label_instance($options);
            if ($event->feed->options['icon_url']) {
              echo '<img src="' . $event->feed->options['icon_url'] . '" alt="(' . $event->feed->options['feed_label'] . ') "> ';
            }
            echo '<a href="' . $event->data[0]['link'] . '">' . $event->data[0]['title'] . '</a> (' . date('D, M j, Y', $event->data[0]['date']) . ')';
            echo '</li>';
             }
            ?>
            </ul>
				<?php link_pages('<p><strong>Pages:</strong>','</p>'); ?>
				<?php edit_post_link('Edit','<p>','</p>'); ?>
			</div>

  <?php endwhile; ?>
<div style="clear: both"></div>
	<?php else: ?>
		<div class="page" id="page-<?php the_ID(); ?>">
			<h2><?php _e('Not Found'); ?></h2>

		</div>

	<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer() ?>
