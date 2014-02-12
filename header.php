<?php include('base-header.php'); ?>
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
<a href="http://sachachua.com/blog/welcome/">Welcome!</a><br />
<?php $numcomms = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved='1'");
echo $numcomms . " comments<br />"; ?>
18,000+ unique visitors/month<br /> 
      <?php if (function_exists('stcounter')) { if (stcounter('twitter')) { echo stcounter('twitter') . ' on <a href="http://twitter.com/sachac">Twitter</a><br />'; } else { echo '<a href="http://twitter.com/sachac">Follow me on Twitter (@sachac)</a><br />'; } } ?>
<a href="http://sachachua.com/blog/subscribe" onclick="javascript:recordOutboundLink(this, 'Subscription','/subscribe/rss/text');"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/subscribe.png" height="15" width="88" alt="Subscribe!" style="margin-bottom: 5px" border="0"/></a>
   <a href="http://sachachua.com/blog/feed" onclick="javascript:recordOutboundLink(this, 'Subscription','/subscribe/rss/text');"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss-icon.png" height="20" alt="Feed reader" border="0" width="22"/></a>
   <a href="http://feedburner.google.com/fb/a/mailverify?uri=sachac&amp;loc=en_US"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/email.png" height="20" alt="E-mail" border="0" width="27" /></a><br />
<?php if (!function_exists('stcounter')) { ?>
<a href="http://twitter.com/sachac">Find me on Twitter</a><br />
                                           <?php } ?>
                                      </div>
<div class="clear"></div>
 

