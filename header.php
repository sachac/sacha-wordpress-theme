<?php include('base-header.php'); ?>
<div class="sticky contain-to-grid top-menu">
  <nav class="top-bar">
    <ul class="links">
      <li><a id="home" class="replace home-design" href="/">Home</a></li>
      <li><a id="about" class="replace home-design" href="/blog/about/">About</a></li>
      <li><a id="resources" class="replace home-design" href="/blog/resources">Resources</a></li>
      <li><a id="index" class="replace show-for-medium-up home-design" href="http://dl.dropbox.com/u/3968124/blog.html">Index</a></li>
      <li><a id="archives" class="replace home-design" href="/blog/archive/">Archives</a></li>
      <li><a id="random" class="replace show-for-medium-up home-design" href="/blog/?random">Random</a></li>
      <li><a id="contact" class="replace home-design" href="/blog/contact">Contact</a></li>
      <li><?php get_search_form(true); ?></li>
    </ul>
  </nav>
</div>
<div class="row header">
  <div class="large-8 columns">
    <h1>
      <a href="<?php bloginfo('url'); ?>"><img id="site-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/small-logo.png" width="640" height="116" alt="Living an Awesome Life - Sacha Chua"></a>
    </h1>
  </div>
  <div class="stats large-4 columns">
    <ul>
      <li><a href="http://sachachua.com/blog/welcome/">Welcome!</a></li>
      <?php $numcomms = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved='1'");
      echo '<li>' . $numcomms . " comments</li>"; ?>
      <li>18,000+ unique visitors/month</li>
      <?php if (function_exists('stcounter') && stcounter('twitter')) { echo '<li>' . stcounter('twitter') . ' on <a href="http://twitter.com/sachac">Twitter</a></li>'; } else { echo '<li><a href="http://twitter.com/sachac">Follow me on Twitter (@sachac)</a></li>'; } ?>
      <li><a href="http://sachachua.com/blog/subscribe" onclick="javascript:recordOutboundLink(this, 'Subscription','/subscribe/rss/text');"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/subscribe.png" height="15" width="88" alt="Subscribe!" border="0"/></a>
      <a href="http://sachachua.com/blog/subscribe"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss-icon.png" height="20" alt="Feed reader" border="0" width="22"/></a><a href="http://feedburner.google.com/fb/a/mailverify?uri=sachac&amp;loc=en_US"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/email.png" height="20" alt="E-mail" border="0" width="27" /></a></li>
    </ul>
  </div>
</div>
 <div class="row">