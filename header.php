<?php include('base-header.php'); ?>
<div class="sticky contain-to-grid top-menu">
  <nav class="top-bar">
    <ul class="links">
      <li><a id="home" class="replace home-design" href="/">Home</a></li>
      <li><a id="about" class="replace home-design" href="/blog/about/">About</a></li>
      <li><a id="resources" class="replace home-design" href="/blog/resources">Resources</a></li>
      <li><a id="index" class="replace show-for-medium-up home-design" href="/blog/index">Index</a></li>
      <li><a id="archives" class="replace home-design" href="/blog/archive/">Archives</a></li>
      <li><a id="random" class="replace show-for-medium-up home-design" href="/blog/random">Random</a></li>
      <li><a id="contact" class="replace home-design" href="/blog/contact">Contact</a></li>
      <li><?php get_search_form(true); ?></li>
    </ul>
  </nav>
</div>
<div class="row header">
  <div class="large-12 columns">
    <h1>
      <a href="<?php bloginfo('url'); ?>"><img id="site-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/small-logo.png" width="640" height="116" alt="Living an Awesome Life - Sacha Chua"></a>
    </h1>
  </div>
</div>
 <div class="row">
