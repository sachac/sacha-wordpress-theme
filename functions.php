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
add_theme_support( 'automatic-feed-links' ); 

add_filter('attachment_fields_to_edit', 'image_caption_to_title', 11, 2 );

function image_caption_to_title( $form_fields, $post ) {
	if ( substr( $post->post_mime_type, 0, 5 ) == 'image' ) {
		$form_fields['post_excerpt']['value'] = $post->post_title;
		//$form_fields['post_excerpt']['input'] = 'hidden';
	}
	return $form_fields;
}
// http://www.wpbeginner.com/wp-tutorials/how-to-redirect-users-to-a-random-post-in-wordpress/
add_action('init','random_add_rewrite');
function random_add_rewrite() {
       global $wp;
       $wp->add_query_var('random');
       add_rewrite_rule('random/?$', 'index.php?random=1', 'top');
}

add_action('template_redirect','random_template');
function random_template() {
       if (get_query_var('random') == 1) {
               $posts = get_posts('post_type=post&orderby=rand&numberposts=1');
               foreach($posts as $post) {
                       $link = get_permalink($post);
               }
               wp_redirect($link,307);
               exit;
       }
}
?>
