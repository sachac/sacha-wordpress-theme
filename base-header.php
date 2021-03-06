<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<script src="<?php echo esc_url( get_template_directory_uri() ) ?>/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/foundation/js/foundation.min.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

	<title><?php wp_title('-', 1, 'right'); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />


	<link rel="openid.server" href="http://sachachua.com/openid/MyID.config.php" />
<meta name="google-site-verification" content="ktFeZ-wntcsTZ0G2mnZF0uKejd6L9YKHrlyGOezAiQU" />
	<link rel="openid.delegate" href="http://sachachua.com/openid/MyID.config.php" />
<link href="https://plus.google.com/113865527017476906160" rel="publisher" />



<script type="text/javascript">
function recordOutboundLink(link, category, action) {
  try {
    var pageTracker=_gat._getTracker("UA-XXXXX-X");
    pageTracker._trackEvent(category, action);
    setTimeout('document.location = "' + link.href + '"', 100)
  }catch(err){}
}
$(document).ready(function() {
    $(".toc-link").click(function(e) {
        var evt = e ? e:window.event;
        if ($($(this).attr('data-href')).length > 0 && !evt.ctrlKey) {
          window.location.hash = $(this).attr('data-href');
          return false;
        }
      });
  });
</script>
        <link rel="stylesheet" href="//www.google.com/cse/style/look/default.css" type="text/css" /> 
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/foundation/css/foundation.min.css" type="text/css" />
        <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v=20200606" type="text/css" media="screen" />
	<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ) ?>/ie6.css" media="screen" />
	<![endif]-->
        <link rel="alternate" type="application/rss+xml" title="Feed (~daily)" href="/blog/feed" />
	<link rel="alternate" type="application/rss+xml" title="Weekly reviews" href="/blog/category/weekly/feed" />
	<link rel="alternate" type="application/rss+xml" title="Monthly reviews" href="/blog/category/monthly/feed" />
	<link rel="alternate" type="application/rss+xml" title="Yearly reviews" href="/blog/category/yearly/feed" />
	<link rel="alternate" type="application/rss+xml" title="Only Emacs posts" href="/blog/category/emacs/feed/" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
        <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
<script src="/blog/wp-content/themes/sacha-v3/jquery.sparkline.min.js" type="text/javascript"></script>
</head>

<body <?php body_class( $class ); ?>><div id="body">

