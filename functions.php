<?php
remove_action('template_redirect', 'redirect_canonical');
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

function modify_url($mod) 
{ 
    $url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
    $query = explode("&", $_SERVER['QUERY_STRING']);
    if (!$_SERVER['QUERY_STRING']) {$queryStart = "?";} else {$queryStart = "&";}
    // modify/delete data 
    foreach($query as $q) 
    { 
        list($key, $value) = explode("=", $q); 
        if(array_key_exists($key, $mod)) 
        { 
            if($mod[$key]) 
            { 
                $url = preg_replace('/'.$key.'='.$value.'/', $key.'='.$mod[$key], $url); 
            } 
            else 
            { 
                $url = preg_replace('/&?'.$key.'='.$value.'/', '', $url); 
            } 
        } 
    } 
    // add new data 
    foreach($mod as $key => $value) 
    { 
        if($value && !preg_match('/'.$key.'=/', $url)) 
        { 
            $url .= $queryStart.$key.'='.$value; 
        } 
    } 
    $url = preg_replace('/\/&/', '/?', $url);
    return $url; 
} 

function DisplayPingTrackbacks() {
 
    // Do not do anything if Disqus is not installed
    //if(!dsq_is_installed()) return;
 
    $current_post_ID = get_the_ID();
 
    global $wpdb;
 
    $sql =  "SELECT comment_author_url, comment_date, comment_content, comment_author FROM $wpdb->comments WHERE comment_post_ID = $current_post_ID AND comment_approved = '1' AND (comment_type = 'pingback' OR comment_type = 'trackback') ORDER BY comment_date ASC";
 
    if ($post_pingtrackbacks = $wpdb->get_results($sql) ) {
 
        $number_of_pingtrackbacks = count($post_pingtrackbacks);
 
        if ($number_of_pingtrackbacks == 1) {
            echo "<div id='pingtrackback'><h3 style='font-size:16px;margin-bottom:10px'>One Pingback/Trackback</h3><ul>";
        } else {
            echo "<div id='pingtrackback'><h3 style='font-size:16px;margin-bottom:10px'>" . $number_of_pingtrackbacks . " Pingbacks/Trackbacks</h3><ul>";
        }
 
        foreach ($post_pingtrackbacks as $post_pingtrackback) {
         
                        echo "<strong>";
                        echo date( 'd F Y \a\t g:ma', strtotime( $post_pingtrackback->comment_date ));
                        echo "</strong><br />";
            $comment_summary = $post_pingtrackback->comment_content;
            echo substr( $comment_summary, 0, strrpos( substr( $comment_summary, 0, 90), ' ' ) ) . ' ...';
 
                        echo "\n<li><a href='";
            echo $post_pingtrackback->comment_author_url;
            echo "'>";
            $author = $post_pingtrackback->comment_author;
            echo html_entity_decode($author);
            echo "</a>";
            echo "</li>";
        }
        echo "</ul></div>";
}}

function sacha_widgets_init() {
  register_sidebar( array('name' => __( 'Sidebar 1', 'sacha' ),
                          'id' => 'sidebar-1',
                          'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'sacha' ),
                          'before_title' => '<h1>',
                          'after_title' => '</h1>',
                          ) );
  register_sidebar( array('name' => __( 'Sidebar 2', 'sacha' ),
                          'id' => 'sidebar-2',
                          'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'sacha' ),
                          'before_title' => '<h1>',
                          'after_title' => '</h1>',
                          ) );

}
add_action('widgets_init', 'sacha_widgets_init');


function sacha_tweak_query() {
    set_query_var('date_query', array('column' => 'post_date',
                                      'before' => $_REQUEST['before'], 
                                      'after' => $_REQUEST['after'], 'inclusive' => true));
    if ($_REQUEST['exclude_cat']) {
        set_query_var('tax_query', array(array('taxonomy' => 'category', 'field' => 'slug', 'terms' => $_REQUEST['exclude_cat'], 'operator' => 'NOT IN')));
    }
    if ($_REQUEST['exclude_tag']) {
        set_query_var('tax_query', array(array('taxonomy' => 'tag', 'field' => 'slug', 'terms' => $_REQUEST['exclude_tag'], 'operator' => 'NOT IN')));
    }
    if ($_REQUEST['bulk']) {
        set_query_var('posts_per_page', -1);
    }
}

add_action('pre_get_posts', 'sacha_tweak_query');

function sacha_body_class($classes) {
  if ($_REQUEST['bulk']) {
    $classes[] = 'bulk';
  }
  return $classes;
}
add_filter('body_class', 'sacha_body_class');
// remove_filter( 'the_content', 'wpautop' );

// https://www.denisbouquet.com/remove-wordpress-emoji-code/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'OTDAddJS');

/**
 * This creates the [my_cat_list] shortcode and calls the
 * my_list_categories_shortcode() function.
 */
add_shortcode( 'my_cat_list', 'my_list_categories_shortcode' );
add_shortcode( 'my_search_form', 'my_search_form_shortcode' );

/**
 * this function outputs your category list where you
 * use the [my_cat_list] shortcode.
 */
function my_list_categories_shortcode() {
    $args = array( 'echo'=>false, 'show_count' => true );
    return wp_list_categories( $args ); 
}

function my_search_form_shortcode( $form ) {
 
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" style="width: 300px" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </div>
    </form>';
 
    return $form;
}