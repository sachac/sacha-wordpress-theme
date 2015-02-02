<?php
/*
Template Name: Books
*/
get_header();
?>
<div class="hfeed columns small-12">
  <?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
<div class="entry">
    <h2><?php the_title() ?></h2>
<div><strong><?php comments_popup_link('Add Comment &#187;', '1 Comment
                                                            &#187;',
                 '% Comments &#187;'); ?></strong></div>
				<?php the_content(); ?>
				<?php wp_link_pages('<p><strong>Pages:</strong>','</p>'); ?>
				<?php edit_post_link('Edit','<p>','</p>'); ?>
			</div>

  <?php endwhile; ?>
<?php endif; ?>
<div><strong><?php comments_popup_link('Add Comment &#187;', '1 Comment
                                                            &#187;',
                 '% Comments &#187;'); ?></strong>
</div>
<h2>Index</h2>
<?php
$_GET['bulk'] = 1;
$my_query = new WP_Query('cat=40&posts_per_page=-1');
?>
<table>
  <tr><th width=70>Date</th><th>Title</th><th>Categories</th></tr>
<?php while ($my_query->have_posts()) :
  $my_query->the_post(); ?>
  <tr><td class="date"><?php the_time('M Y') ?></td><td class="post_title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></td><td>

<?php $cat = get_the_category(false);
      $list = '';
      foreach ($cat as $category) {
      if ($category->name != 'book') {
      if ($list) { $list .= ', '; } 
      $list .= '<a href="' . get_category_link( $category->term_id ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s", 'sacha' ), $category->name ) ) . '" ' . $rel . '>' . $category->name.'</a>';
      $i++; }
      }
      print $list;
   ?></td></tr>
      <?php endwhile; ?>
      </table>
      <?php edit_post_link('Edit','<p>','</p>'); ?>
<div><strong><?php comments_popup_link('Add Comment &#187;', '1 Comment
                                                            &#187;',
                 '% Comments &#187;'); ?></strong></div>
				<div class="comments-template">
					<?php comments_template(); ?>
				</div>

      </div>
<?php get_footer() ?>

