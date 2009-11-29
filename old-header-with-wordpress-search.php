<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<link rel="openid.server" href="http://sachachua.com/openid/MyID.config.php" />
	<link rel="openid.delegate" href="http://sachachua.com/openid/MyID.config.php" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie6.css" media="screen" />
	<![endif]-->
	<link rel="alternate" type="application/rss+xml" title="Most items (excluding tidbits)" href="<?php bloginfo('rss2_url'); ?>?cat=-550" />
	<link rel="alternate" type="application/rss+xml" title="Only weekly reviews" href="http://sachachua.com/wp/category/weekly/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Only Emacs posts" href="http://sachachua.com/wp/category/emacs/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Only Drupal posts" href="http://sachachua.com/wp/category/drupal/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Only sketches" href="http://sachachua.com/wp/category/sketches/feed/" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>

<body>
<div id="header"><div class="title">

<img src="http://sachachua.com/notebook/pics/sacha-20080111-48x72-lowres.jpg" align="left" vspace=20 hspace=20 alt="" />		
<div style="float: right; margin-top: 2em; border: 1pt solid lightgray; padding: 10px">
<a href="http://feeds.feedburner.com/sachac"><img src="http://feeds.feedburner.com/~fc/sachac?bg=&amp;fg=&amp;anim=&amp;label=readers" height="26" width="88" style="border:0" alt="" /></a><br />
<a href="http://feedburner.google.com/fb/a/mailverify?uri=sachac&amp;loc=en_US">Subscribe by e-mail</a><br />
<a href="http://feeds.feedburner.com/sachac">Subscribe to feed</a><br />
</div>
			<h1><a href="<?php bloginfo('url'); ?>">sacha chua</a> :: living an awesome life</h1>
<a href="http://sachachua.com/wp/about/">enterprise 2.0 consultant, storyteller, geek, and more</a>
<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<br clear="left" />
<div class="topmenu" style="border-top: 1pt dotted lightgray; border-bottom: 1pt dotted lightgray; padding-left: 20px;">
		<a href="http://sachachua.com/wp">Home</a> - 
<a href="http://sachachua.com/wp/about/">About</a> - 
<a href="http://sachachua.com/wp/speaking">Speaking</a> - 
<a href="http://sachachua.com/wp/archive-index/">Archives</a> - <a 
href="http://sachachua.com/wp/contact-me">Contact me</a> - Search this site:
	<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15" />
	<input type="submit" id="searchsubmit" value="Search" />
</div></form>

</div></div>

<div id="wrapper" style="clear: both">


