<?php get_header(); ?>
 <div class="content columns large-8 small-12">
     <h2 class="center">Sorry! Page not found.</h2> 
Please <a href="http://sachachua.com/blog/contact">tell me what you're looking for,</a> or try searching:

<form method="get" action="<?php bloginfo('url') ?>">
<fieldset>
<input name="s" type="text" value="<?php
$query  = urldecode( $_SERVER['PATH_INFO'] );
$query  = preg_replace( '/\//', ' ', $query );
if ( @is_array( $_SERVER['argv'] ) ) {
foreach( $_SERVER['argv'] as $arg ) {
$arg= explode( '=', $arg );
$query  .= ' ' . urldecode( $arg[1] );
}
}
echo trim( $query );
?>" onfocus="this.select();" />
<input type="submit" value="Find" />
</fieldset>
</form>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
