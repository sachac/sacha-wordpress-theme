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
<style type="text/css">ul.post_list li { margin-bottom: 10px; } </style>

<div id="container">

<p>
You can probably tell that I really, really like the Emacs text editor. Here are some of the posts I've written about Emacs over the past few years. I'm also writing a book about Emacs called "Wicked Cool Emacs", to be published by <a href="http://www.nostarch.com">No Starch Press</a>. Keep up with it through my blog posts tagged <a href="http://sachachua.com/wp/category/wickedcoolemacs">wickedcoolemacs</a>!</p>

<p>
For more Emacs posts from other people, check out <a href="http://planet.emacsen.org">Planet Emacsen</a>. For all things Emacs, check out the <a href="http://www.emacswiki.org">EmacsWiki</a>.</p>


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
<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> 

<?php edit_post_link('Edit', ' &#124; ', ''); ?></span><br/> 
<script src="http://feeds.feedburner.com/~s/sachac?i=<?php the_permalink() ?>" type="text/javascript" charset="utf-8"></script>
</p>
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
