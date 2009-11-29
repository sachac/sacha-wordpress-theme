<?php get_header(); 

if ($orderby == 'title')
{ 
   $posts = query_posts($query_string . '&orderby=title&order=asc&posts_per_page=20');
}
else
{
   $posts = query_posts($query_string . '&orderby=date&order=desc&posts_per_page=20');
}
?>
<style type="text/css">ul.post_list li { margin-bottom: 10px; } </style>

<div id="container">

<p>
You can probably tell that I really, really like the Emacs text editor. Here are some of the posts related to "Wicked Cool Emacs", a book that will be published through <a href="http://www.nostarch.com">No Starch Press</a>. You can read more of my <a href="http://sachachua.com/wp/category/emacs">Emacs posts</a>, or hop on over to <a href="http://planet.emacsen.org">Planet Emacsen</a> to read other Emacs geeks' blogs. For all things Emacs, check out the <a href="http://www.emacswiki.org">EmacsWiki</a>.</p>


	<?php if(have_posts()): ?>
	
	<h2 class="archive_head">Entries Tagged as '<?php echo single_cat_title(); ?>'</h2>
      
	<div class="postnav">
			<?php posts_nav_link(); ?>
		</div>

	<?php while(have_posts()):the_post(); ?>
<p style="margin-top: 20px; margin-bottom: 20px;">
		<strong><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></strong><br/>
				<span class="postmetadata">
<?php _e('Posted on'); ?> <span class="postdate"><?php the_time('F jS, Y') ?></span> 
<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?></span><br/> 
</p>
<script src="http://feeds.feedburner.com/~s/sachac?i=<?php the_permalink() ?>" type="text/javascript" charset="utf-8"></script>
<hr size="1" />	

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
