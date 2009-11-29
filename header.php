<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

	<title><?php wp_title('&raquo;', 1, 'right'); bloginfo('name'); ?></title>

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
	<?php wp_head(); ?>
</head>

<body>
<div id="header"><div class="title">
<img src="http://sachachua.com/notebook/pics/sacha-20080111-48x72-lowres.jpg" align="left" vspace=20 hspace=20 alt="" />
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/face.png" alt="" height="72" align="right" vspace="20" />
                                                        <h1><a href="<?php bloginfo('url'); ?>">sacha chua</a> :: living an awesome life</h1>
<a href="http://sachachua.com/wp/about/">enterprise 2.0 consultant, storyteller, geek, and more</a>
<br clear="left" />
<div class="topmenu" style="border-top: 1pt dotted lightgray; border-bottom: 1pt dotted lightgray; padding-left: 20px;">
		<a href="http://sachachua.com/wp">Home</a> - 
<a href="http://sachachua.com/wp/about/">About</a> - 
<a href="http://sachachua.com/wp/speaking">Speaking</a> - 
<a href="http://sachachua.com/wp/archive-index/">Archives</a> - <a 
href="http://sachachua.com/wp/contact-me">Contact me</a> - Search this site:
<!-- Google Custom Search Element -->
<div id="cse" style="width:100%;">Loading</div>
<script type="text/javascript">
  google.load('search', '1');
  google.setOnLoadCallback(function(){
    new google.search.CustomSearchControl().draw('cse');
  }, true);
</script>
</div>

</div></div>

<div id="wrapper" style="clear: both">


