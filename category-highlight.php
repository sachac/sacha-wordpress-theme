<?php get_header(); 

if ($orderby == 'title')
{ 
   $posts = query_posts($query_string . '&orderby=title&order=asc&posts_per_page=30');
}
else
{
   $posts = query_posts($query_string . '&orderby=date&order=desc&posts_per_page=30');
}
?>
<div class="grid_16 content">
<div id="cse" style="width:100%;"></div>
  <h1>Best of...</h1>
  <p>There are a <em>lot</em> of posts on my blog, so I thought I'd put together a list of my favourites. If you really liked something that's not on this list, please e-mail me at <a href="mailto:sacha@sachachua.com">sacha@sachachua.com</a> so that I can add it!</p>
  <?php if(have_posts()): ?>
    <h2 class="archive_head">Entries Tagged as '<?php echo single_cat_title(); ?>'</h2>
      
  <div class="navigation">
    <div class="left">
      <?php next_posts_link('&laquo; Older posts'); ?>
    </div><div class="right">	
      <?php previous_posts_link('Newer posts &raquo;'); ?>
    </div>
  <div style="clear: both"></div>
  </div>
<table>
<tr><th width="50">Date</th><th>Title</th><th>Categories</th></tr>
	<?php 
while(have_posts()):the_post(); 
$list = ''; $i = 0; ?>
    <tr><td><?php the_time('M j, Y') ?></td><td><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></td><td><?php $cat = get_the_category(false); foreach ($cat as $category) { if ($category->term_id != 678) {
if (0 < $i) { $list .= ', '; } 
  $list .= '<a href="' . get_category_link( $category->term_id ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" ' . $rel . '>' . $category->name.'</a>';
  $i++; } }
print $list;
   ?></td></tr>

	<?php endwhile; ?>
</table>
  <div class="navigation">
    <div class="left">
      <?php next_posts_link('&laquo; Older posts'); ?>
    </div><div class="right">	
      <?php previous_posts_link('Newer posts &raquo;'); ?>
    </div>
  <div style="clear: both"></div>
  </div>

	<?php else: ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><?php _e('Not Found'); ?></h2>

		</div>

	<?php endif; ?>

</div>
<?php get_footer() ?>

