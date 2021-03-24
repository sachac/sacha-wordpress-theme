</div>
<footer class="row footer" id="footer">
<div class="small-12 columns">

  <p>Like this? <a href="/blog/subscribe/">
Subscribe!</a> <a href="https://twitter.com/sachac">Follow me on Twitter</a> for quick updates. <a href="/blog/contact">Contact me</a> --
I'd love to hear your thoughts, questions, and suggestions!</p>
  <br />
  <ul class="links">
    <li><a href="/blog">Home</a></li>
    <li><a href="/blog/about/">About</a></li>
    <li><a href="/blog/index">Index</a></li>
    <li><a href="/blog/archive/">Archives</a></li>
    <li><a href="/blog/category/">Categories</a></li>
    <li><a href="/blog/?random">Random</a></li>
    <li><a href="/blog/privacy">Privacy</a>
    <li><a href="/blog/contact">Contact</a>
  </li></ul>


  <p>
    Copyright &#169; 2001-2021 Sacha Chua (<a href="mailto:sacha@sachachua.com">sacha@sachachua.com</a>). Emacs code snippets are generally under <a href="https://www.gnu.org/licenses/gpl-3.0.en.html">GPLv3+</a>. Please feel free to reuse or share content under a <a href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution</a> license unless otherwise noted. You can generally click on images for larger versions. Thanks for reading!
  </p>
</div>

<script>
 var urlParams = new URLSearchParams(window.location.search);
 if (urlParams && urlParams.has('new-window')) {
   $('.entry a, .entry-content a').attr('target', '_blank');
   // https://css-tricks.com/snippets/jquery/find-all-internal-links/
   var siteURL = window.location.protocol + '//' + top.location.host.toString();
   var $internalLinks = $("a[href^='"+siteURL+"'], a[href^='/'], a[href^='./'], a[href^='../'], a[href^='#']");
   $internalLinks.each(function() {
     var href = $(this).attr('href');
     if (href) {
       $(this).attr('href', href + (href.match('\\?') ? '&' : '?') + 'new-window=' + urlParams.get('new-window'));
     }
   });
 }
 
 $("img#site-logo").hover(function() { 
   $(this).attr("src", "<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/images/animated-logo.gif");
 }, function() { 
   $(this).attr("src", "<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/images/small-logo.png");
 }); 
</script>

<?php wp_footer(); ?>
</div>
</footer>
</body>
</html>
