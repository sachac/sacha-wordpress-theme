<?php get_header(); ?>
<?php 
if ($_REQUEST['posts'] && is_numeric($_REQUEST['posts'])) {
  global $query_string;
  query_posts($query_string . '&posts_per_page=' . $_REQUEST['posts']);
# } else {
# query_posts($query_string . '&posts_per_page=3'); 
} ?>
  <div class="content small-12 large-8 columns">
    <div id="cse" style="width:100%;"></div>
    <div class="hfeed">
      <?php if ( is_search() ) { 
         echo "<h1>Search results: " . get_search_query() . "</h1>"; 
         if (!have_posts()) {
           echo '<p>Your search for <strong>' . get_search_query() . '</strong> has returned no results. Please try a new search. Got an idea for a blog post you\'d like me to write? <a href="/blog/contact">Contact me!</a></p>';
         }
      } ?>
    <div class="navigation">
      <span class="nav-left"><?php next_posts_link('&laquo; Older posts'); ?></span>
      - <span class="count"><?php echo $wp_query->found_posts . ' total post(s)' ?></span>
      <span class="nav-right"><?php previous_posts_link('Newer posts &raquo;'); ?>
      </span>
      <div style="clear: both"></div>
    </div>
    <?php if(have_posts()): ?>
      <div class="on-this-page">On this page:<ul>
        <?php while(have_posts()):the_post(); ?>
  <li><a href="<?php the_permalink(); ?>" class="toc-link" data-href="#post-<?php the_ID(); ?>" title="<?php the_title(); ?>" class="entry-summary-title"><?php the_title(); ?></a><span class="comments"><?php comments_number('', ' - (1)', ' - (%)') ?></span></li>
        <?php endwhile; rewind_posts(); ?>
      </ul></div>
      <?php while(have_posts()):the_post();
         include('post.php'); 
      endwhile; ?>
      <div class="navigation">
        <div class="left"><?php next_posts_link('&laquo; Older posts'); ?></div><div class="right"><?php previous_posts_link('Newer posts &raquo;'); ?></div>
        <div style="clear: both"></div>
      </div>
    <?php else: ?>
      <h2><?php _e('Couldn\'t find it... Sorry!'); ?></h2>
    <?php endif; ?>
    </div><!--hfeed-->
  </div><!--content-->

<?php get_sidebar(); ?>
<?php get_footer() ?>

