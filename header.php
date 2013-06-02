<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

	<title><?php wp_title('&raquo;', 1, 'right'); bloginfo('name'); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<link rel="openid.server" href="http://sachachua.com/openid/MyID.config.php" />
<meta name="google-site-verification" content="ktFeZ-wntcsTZ0G2mnZF0uKejd6L9YKHrlyGOezAiQU" />
	<link rel="openid.delegate" href="http://sachachua.com/openid/MyID.config.php" />
<link href="https://plus.google.com/113865527017476906160" rel="publisher" />
<link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" /> 
<link href='http://fonts.googleapis.com/css?family=Loved+by+the+King|Open+Sans' rel='stylesheet' type='text/css'>

<script type="text/javascript">
function recordOutboundLink(link, category, action) {
  try {
    var pageTracker=_gat._getTracker("UA-XXXXX-X");
    pageTracker._trackEvent(category, action);
    setTimeout('document.location = "' + link.href + '"', 100)
  }catch(err){}
}
</script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen" />
	<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie6.css" media="screen" />
	<![endif]-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/compressed/css/960_16_10_10.css" type="text/css" />
        <link rel="alternate" type="application/rss+xml" title="Feed (~daily)" href="http://feeds.sachachua.com/sachac" />
	<link rel="alternate" type="application/rss+xml" title="Weekly reviews" href="http://feeds.sachachua.com/sachac-weekly" />
	<link rel="alternate" type="application/rss+xml" title="Monthly reviews" href="http://feeds.sachachua.com/sachac-monthly" />
	<link rel="alternate" type="application/rss+xml" title="Only Emacs posts" href="http://sachachua.com/blog/category/emacs/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Only sketches" href="http://sachachua.com/blog/category/sketches/feed/" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
<script src="http://sachachua.com/blog/wp-content/themes/sacha-v3/jquery.sparkline.min.js" type="text/javascript"></script>
</head>

<body><div id="body">
<div class="container_16">
  <div class="grid_13 header" style="text-align: left">
    <h1>
      <a href="<?php bloginfo('url'); ?>"><span class="replace name home-design">sacha chua</span>
      <span class="replace site-title home-design">living an awesome life</span></a></h1>

<ul class="links" style="margin-bottom: 0">
<li><a id="home" class="replace home-design" href="/">Home</a></li>
<li><a id="about" class="replace home-design" href="/blog/about/">About</a></li>
<li><a id="index" class="replace home-design" href="http://dl.dropbox.com/u/3968124/blog.html">Index</a></li>
<li><a id="archives" class="replace home-design" href="/blog/archive/">Archives</a></li>
<li><a id="random" class="replace home-design" href="/blog/?random">Random</a></li>
<li><a id="contact" class="replace home-design" href="/blog/contact">Contact</a></li></ul>
</div>
<div class="grid_3 stats">
<?php $numcomms = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved='1'");
echo $numcomms . " comments<br />"; ?>
                                                        <?php if (function_exists('stcounter')) { echo stcounter('feedburner') . ' subscribers<br />'; } ?>
      <?php if (function_exists('stcounter')) { if (stcounter('twitter')) { echo stcounter('twitter') . ' on <a href="http://twitter.com/sachac">Twitter</a><br />'; } else { echo '<a href="http://twitter.com/sachac">Follow me on Twitter (@sachac)</a><br />'; } } ?>
<a href="http://feeds.sachachua.com/sachac" onclick="javascript:recordOutboundLink(this, 'Subscription','/subscribe/rss/text');"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/subscribe.png" height="15" width="88" alt="Subscribe!" style="margin-bottom: 5px" border="0"/></a>
   <a href="http://feeds.sachachua.com/sachac" onclick="javascript:recordOutboundLink(this, 'Subscription','/subscribe/rss/text');"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss-icon.png" height="20" alt="Feed reader" border="0" width="22"/></a>
   <a href="http://feedburner.google.com/fb/a/mailverify?uri=sachac&amp;loc=en_US"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/email.png" height="20" alt="E-mail" border="0" width="27" /></a><br />
<?php if (!function_exists('stcounter')) { ?>
<a href="http://twitter.com/sachac">Find me on Twitter</a><br />
                                           <?php } ?>
                                      </div>
<div class="clear"></div>
 

