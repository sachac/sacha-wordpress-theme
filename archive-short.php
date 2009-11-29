<?php get_header(); 

if ($orderby == 'title')
{ 
   $posts = query_posts($query_string . '&orderby=title&order=asc&posts_per_page=50');
}
else
{
   $posts = query_posts($query_string . '&orderby=date&order=desc&posts_per_page=50');
}
?>
<style type="text/css">ul.post_list li { margin-bottom: 10px; } </style>

<div id="container">

	<?php if(have_posts()): ?>
	
	<h2 class="archive_head">Entries Tagged as '<?php echo single_cat_title(); ?>'</h2>
      
	<div class="postnav">
			<?php posts_nav_link(); ?>
		</div>

        <ul class="post_list">
	<?php while(have_posts()):the_post(); ?>

		<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><br/>
				<span class="postmetadata">
<?php _e('Posted on'); ?> <span class="postdate"><?php the_time('F jS, Y') ?></span> 
<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?></span><br/> <?php the_excerpt_reloaded(20, nil, nil, TRUE, '(more)'); ?> </li>
			

	<?php endwhile; ?>
</ul>
		<div class="postnav">
			<?php posts_nav_link(); ?>
		</div>

	<?php else: ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><?php _e('Not Found'); ?></h2>

		</div>

	<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer() ?>

</div></body>
</html>