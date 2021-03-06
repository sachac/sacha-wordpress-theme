<article class="post hentry" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="entry-title"><?php the_title(); ?></a></h2>

  <div class="postinfo">
    <span class="postdate"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:s\Z') ?>"><?php the_time('F jS, Y') ?></abbr></span>
    <span class="read-more-link"><?php _e('Read more about ', 'sacha'); the_category(', '); ?> <?php the_tags(); ?></span>
    <span class="comment-link">
      <?php comments_popup_link('Add Comment &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></span>
  </div>
  <div class="entry">
    <div class="entry-content">
      <?php the_content("[Read more &rarr;]"); ?>

    </div>
    <?php if (function_exists('the_ratings')) { 
         the_ratings(); } ?> 
    
    <p class="postmetadata">
      <strong><?php comments_popup_link('Add Comment &#187;', '1 Comment
                                                            &#187;',
                                        '% Comments &#187;'); ?></strong>
      <?php _e('Read more about ', 'sacha'); the_category(', '); ?> <?php the_tags(); ?> 
      <?php
      print '<!-- date: ' . get_the_date('Y-m') . ' ' . date('Y-m', time() - 60 * 60 * 24 * 7 * 2) . '-->';
      if (get_the_date('Y') >= '2008' && get_the_date('Y-m') < date('Y-m', time() - 60 * 60 * 24 * 7 * 2)) {
        print ' | ';
        print '<a href="http://pages.sachachua.com/sharing/blog.html?url=' . get_permalink() . '">See in index</a>';
      }
      ?>
      <?php edit_post_link('Edit', ' &#124; ', ''); ?>
    </p>

  </div>

</article>
<div id="respond"></div>
