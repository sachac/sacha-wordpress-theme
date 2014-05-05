<?php get_header(); ?>
<?php
if ($_REQUEST['posts'] && is_numeric($_REQUEST['posts'])) {
  global $query_string;
  query_posts($query_string . '&posts_per_page=' . $_REQUEST['posts']);
# } else {
# query_posts($query_string . '&posts_per_page=3');
} ?>

<div class="content columns small-12 large-8">
  <div id="cse" style="width:100%;"></div>
  <div class="navigation">
    <?php if ($_REQUEST['order'] == 'asc') {
      echo '<a href="' . add_query_arg('order', 'desc') . '">Change view to newest posts first (default)</a><br />';
      ?>
      <span class="nav-left">
      <?php previous_posts_link('&laquo; Older posts'); ?>
      </span> 
      - <span class="count">
      <?php echo $wp_query->found_posts . ' total post(s)' ?>
      </span><span class="nav-right">
      <?php next_posts_link('Newer posts &raquo;'); ?>
      </span>
      <div style="clear: both"></div>
      <?php } else {
    echo '<a href="' . add_query_arg('order', 'asc') . '">Change view to oldest posts first</a><br />'; ?>
      <span class="nav-left">
      <?php next_posts_link('&laquo; Older posts'); ?>
      </span> - <span class="count">
      <?php echo $wp_query->found_posts . ' total post(s)' ?>
      </span><span class="nav-right">
      <?php previous_posts_link('Newer posts &raquo;'); ?>
      </span>
    <div style="clear: both"></div>
    <?php } // endif
    ?>
  </div>
  <div class="hfeed">
    <?php 
    $page = (get_query_var('paged') ? get_query_var('paged') : 1);
    if ($page == 1 && is_category() && category_description()) { 
      echo '<div class="category-description">' . category_description() . '</div>';
    } ?>
    <?php if(have_posts()): ?>
      <div class="on-this-page">On this page:<ul>
        <?php while(have_posts()):the_post(); ?>
        <li><a href="#post-<?php the_ID(); ?>" title="<?php the_title(); ?>" class="entry-summary-title"><?php the_title(); ?></a></li>
        <?php endwhile; rewind_posts(); ?>
      </ul></div>
      <?php while(have_posts()):the_post();
       include('post.php'); ?>
        <?php endwhile; ?>

        <div class="navigation">
          <?php if ($_REQUEST['order'] == 'asc') { ?>
            <span class="nav-left">
            <?php previous_posts_link('&laquo; Older posts'); ?>
            </span> 
            - <span class="count">
            <?php echo $wp_query->found_posts . ' total post(s)' ?>
            </span><span class="nav-right">
            <?php next_posts_link('Newer posts &raquo;'); ?>
            </span>
            <div style="clear: both"></div>
          <?php } else { ?>
            <span class="nav-left">
            <?php next_posts_link('&laquo; Older posts'); ?>
            </span> - <span class="count">
            <?php echo $wp_query->found_posts . ' total post(s)' ?>
            </span><span class="nav-right">
            <?php previous_posts_link('Newer posts &raquo;'); ?>
            </span>
          <?php } /* endif */ ?>
          <div style="clear: both"></div>
        </div>
    <?php else: ?>
      <div class="post" id="post-<?php the_ID(); ?>">
      <h2><?php _e('Not Found'); ?></h2>
      </div>
    <?php endif; ?>
   </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer() ?>

