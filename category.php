<?php get_header(); ?>
<?php
if ($_REQUEST['posts'] && is_numeric($_REQUEST['posts'])) {
  global $query_string;
  set_query_var('posts_per_page', $_REQUEST['posts']);
}
?>
<div class="content columns small-12 large-12">
  <div id="cse" style="width:100%;"></div>
  <div class="navigation">
    <?php if ($_REQUEST['order'] == 'asc') { ?>
      <div class="navigation row">
    <div class="small-12 large-4 columns"><?php previous_posts_link('&laquo; Older posts'); ?>&nbsp;</div>
    <div class="small-12 large-4 columns archive-count"><span class="count"><?php echo $wp_query->found_posts . ' total post(s)' ?><br />
    <small><?php echo '<a href="' . add_query_arg('order', 'desc') . '">Change to newest posts first</a>'; ?></small>
    </div>
    <div class="small-12 large-4 columns newer">&nbsp;<?php next_posts_link('Newer posts &raquo;'); ?></div>
		</div>
      
      <?php } else { ?>
    <div class="navigation row">
    <div class="small-12 large-4 columns"><?php next_posts_link('&laquo; Older posts'); ?>&nbsp;</div>
    <div class="small-12 large-4 columns archive-count"><span class="count"><?php echo $wp_query->found_posts . ' total post(s)' ?><br />
    <small><?php echo '<a href="' . add_query_arg('order', 'asc') . '">Change to oldest posts first</a>'; ?></small>
    </div>
    <div class="small-12 large-4 columns newer">&nbsp;<?php previous_posts_link('Newer posts &raquo;'); ?></div>
		</div>
    <?php } // endif
    ?>
  </div>
  <div class="hfeed">
    <header class="archive-header">
      <h1 class="archive-title"><?php printf( 'Category Archives: %s', single_cat_title( '', false ) ); ?></h1>
      <?php
      $page = (get_query_var('paged') ? get_query_var('paged') : 1);
      if ($page == 1) {
        // Show an optional term description.
        $term_description = term_description();
        if ( ! empty( $term_description ) ) :
                printf( '<div class="taxonomy-description">%s</div>', $term_description );
        endif;
     }
     ?>
   </header><!-- .archive-header -->
   <?php if(have_posts()): ?>
      <div class="on-this-page">On this page:<ul>
        <?php while(have_posts()):the_post(); ?>
<li><a href="<?php the_permalink(); ?>" class="toc-link" data-href="#post-<?php the_ID(); ?>" title="<?php the_title(); ?>" class="entry-summary-title"><?php the_title(); ?></a></li>
        <?php endwhile; rewind_posts(); ?>
      </ul></div>
      <?php while(have_posts()):the_post();
       include('post.php'); ?>
        <?php endwhile; ?>

    <?php if ($_REQUEST['order'] == 'asc') { ?>
      <div class="navigation row">
    <div class="small-12 large-4 columns"><?php previous_posts_link('&laquo; Older posts'); ?>&nbsp;</div>
    <div class="small-12 large-4 columns archive-count"><span class="count"><?php echo $wp_query->found_posts . ' total post(s)' ?></div>
    <div class="small-12 large-4 columns newer">&nbsp;<?php next_posts_link('Newer posts &raquo;'); ?></div>
		</div>
      
      <?php } else { ?>
    <div class="navigation row">
    <div class="small-12 large-4 columns"><?php next_posts_link('&laquo; Older posts'); ?>&nbsp;</div>
    <div class="small-12 large-4 columns archive-count"><span class="count"><?php echo $wp_query->found_posts . ' total post(s)' ?></div>
    <div class="small-12 large-4 columns newer">&nbsp;<?php previous_posts_link('Newer posts &raquo;'); ?></div>
		</div>
    <?php } // endif     ?>
    <?php endif;  ?>
   </div>
</div>
<?php get_footer() ?>

