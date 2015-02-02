</div>
<footer class="row footer">
<div class="small-12 columns">

  <p>Like this? <a href="http://sachachua.com/blog/subscribe/">
Subscribe!</a> <a href="http://twitter.com/sachac">Follow me on Twitter</a> for quick updates, and add me on 
<a href="https://plus.google.com/113865527017476906160/posts?rel=author" rel="publisher">Google+</a>. <a href="http://sachachua.com/blog/contact">Contact me</a>: 
I'd love to hear your thoughts, questions, and suggestions!</p>
  <br />
  <ul class="links">
    <li><a href="/blog">Home</a></li>
    <li><a href="/blog/about/">About</a></li>
    <li><a href="/blog/index">Index</a></li>
    <li><a href="/blog/archive/">Archives</a></li>
    <li><a href="/blog/?random">Random</a></li>
    <li><a href="/blog/privacy">Privacy</a>
    <li><a href="/blog/contact">Contact</a>
  </li></ul>


  <p>
    Copyright &#169; 2001-2014 Sacha Chua (<a href="mailto:sacha@sachachua.com">sacha@sachachua.com</a>). Please feel free to reuse or share content under a <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution</a> license unless otherwise noted. You can generally click on images for larger versions. Thanks for reading!
  </p>
</div>

  <script>
    $(document).foundation();
    $("img#site-logo").hover(function() { 
      $(this).attr("src", "<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/images/animated-logo.gif");
    }, function() { 
      $(this).attr("src", "<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/images/small-logo.png");
    }); 
  </script>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<?php wp_footer(); ?>
</div>
</footer>
</body>
</html>
