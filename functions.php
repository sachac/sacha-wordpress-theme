<?php
if ( function_exists('register_sidebar') )
  register_sidebars(2);

// For use on pages which list posts, and to be used within the_loop(). Outputs a
// date header to split up the post listings. See the_date() template tag docs for
// usage: http://codex.wordpress.org/Template_Tags/the_date
function intermittent_date_header( $d='', $before='', $after='', $echo = true )
{
  global $idh_last_date_header;
  // Get the current date
  $date_header = the_date( $d, $before, $after, false );
  // If it's the same, don't bother continuing
  if ( $date_header == $idh_last_date_header ) return;
  // Record the current date header as the last one
  $idh_last_date_header = $date_header;
  // Decide what to do, and do it. Return, or echo...
  if ( ! $echo ) return $date_header;
  echo $date_header;
}
add_theme_support( 'post-thumbnails' ); 
?>
