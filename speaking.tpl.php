<?php
/*
Template Name: Speaking
*/
?>
<?php get_header(); ?>

<div id="container">
<h3>Topics</h3>

People often ask me to share what I've learned about:

<ul>
<li>Web 2.0 and Enterprise 2.0</li>
<li>Generation Y</li>
<li>Social networking</li>
<li>Drupal and open source development</li>
<li>Career development</li>
</ul>

<p>I'd also be happy to talk about any of the other subjects I write about on my blog.</p>

<p>To check out my presentation style, view this <a href="http://sachachua.com/wp/2009/02/11/recording-of-enterprise-20-and-knowledge-management-lecture/">recording of a recent Enterprise 2.0 and Knowledge Management lecture</a> for a class at the York University Schulich School of Business.</p>

<p>If you're interested in inviting me for a talk at your organization, please feel free to contact me at <a href="mailto:sacha@sachachua.com">sacha@sachachua.com</a>. Looking forward to being of service!</p>

<h3>Testimonials</h3>

<blockquote>
Sacha gave the best presentation I have seen on the topic of social networking. I was struck by the clarity of her charts, the simplicity of the examples she used, and her ability to handle "rough" questions from the crowd with grace and ease. At this writing, Social Networking is still new, and many of the "old guard" regard it with suspicion and even hostility. Sacha's approach was perfect for such a crowd. She is an exceptional evangelist.
</blockquote>
Paul Baffes, Ph.D., Program Director, IBM Innovation Programs, February 16, 2009

<blockquote>
I have received overwhelmingly positive feedback from the community about this presentation, and personally I found it extremely valuable for my projects going forward. Over the past couple of months, Sacha has helped me with gaps in my knowledge, and I am very grateful for that. Moreover, she has influenced me to share my knowledge much in the same way she does, via blogs and community tools. Sacha has emerged as the leading IBM subject matter expert in the Drupal technology. Kudos!</blockquote>
<p>Bill Shaouy, IT Architect, IBM Global Services, February 18, 2009</p>

<blockquote>
The first time I met Sacha she was addressing a huge audience and she captured everyone's attention with her enthusiasm and knowledge. Sacha truly is a technology evangelist and I am happy to know her. I expect to see many more great things from Sacha in the future!
</blockquote>
<p>Mira Jelic, Owner, Cognisi, May 4, 2007</p>

<a href="http://www.linkedin.com/sachac">Read more testimonials on my LinkedIn profile</a>

<h3>My posts about recent talks</h3>

<ul>
<?php query_posts('category_name=presentation&showposts=10'); ?>
<?php while(have_posts()): the_post(); ?>
<li><a href="<?php the_permalink(); ?> title="<?php the_title();?>"><?php the_title(); ?></a></li>
       	<?php endwhile; ?>
</ul>
<a href="http://sachachua.com/wp/category/presentation">More posts about public speaking</a>

	</div>
<div style="float: left">
<div style="margin: auto; width: 357px;"><object style="margin: 0px;" height="542" width="355"><param name="movie" value="http://static.slideshare.net.s3.amazonaws.com/swf/egowidget2PT.swf"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><font><embed src="http://static.slideshare.net.s3.amazonaws.com/swf/egowidget2PT.swf" flashvars="feedurl=user/sachac&amp;widgettitle=Recent Presentations" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" height="542" width="355"></font></object><font><br></font><div style="font-size: 11px; font-family: tahoma,arial; height: 26px; padding-top: 2px; text-align: left;"><font><a href="http://www.slideshare.net/?src=egowidget"><img src="http://static.slideshare.net/swf/logo_embd.png" style="border: 0px none ; margin-bottom: -5px;" alt="SlideShare"></a> | <a href="http://www.slideshare.net/widgets/presentation-pack" title="Get your Presentation Pack">Get your Presentation Pack</a></font></div></div>
</div>
<?php get_footer() ?>
<style type="text/css">
#container { width: 500px; }
</style>
</div></body>
</html>
