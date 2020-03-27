<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() {
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'blankslate' ) ) );
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts() {
wp_enqueue_style( 'blankslate-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_footer', 'blankslate_footer_scripts' );
function blankslate_footer_scripts() {
?>
<script>
jQuery(document).ready(function ($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
$("html").addClass("mobile");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
});
</script>
<?php
}
add_filter( 'document_title_separator', 'blankslate_document_title_separator' );
function blankslate_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'the_content_more_link', 'blankslate_read_more_link' );
function blankslate_read_more_link() {
if ( ! is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
}
}
add_filter( 'excerpt_more', 'blankslate_excerpt_read_more_link' );
function blankslate_excerpt_read_more_link( $more ) {
if ( ! is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">Read More</a>';
}
}
add_filter( 'intermediate_image_sizes_advanced', 'blankslate_image_insert_override' );
function blankslate_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
return $sizes;
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'blankslate_pingback_header' );
function blankslate_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function blankslate_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'blankslate_comment_count', 0 );
function blankslate_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

function wpdocs_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999);
/* code start */
// function service_posttype() {
// register_post_type( 'services',
// array(
//     'labels' => array(
//     'name' => __( 'Services' ),
//     'singular_name' => __( 'Services' )
//     ),
//     'public' => true,
//     'has_archive' => false,
//     'rewrite' => array('slug' => 'services'),
//     'supports' => array( 'thumbnail' ),
//     )
// );
// }
// add_action( 'init', 'service_posttype' );
/* code end */
/* code start */
// function testimonial_posttype() {
// register_post_type( 'testimonial',
// array(
//     'labels' => array(
//     'name' => __( 'Testimonial' ),
//     'singular_name' => __( 'Testimonial' )
//     ),
//     'public' => true,
//     'has_archive' => false,
//     'rewrite' => array('slug' => 'testimonial'),
//     'supports' => array( 'thumbnail' ),
//     )
// );
// }
// add_action( 'init', 'testimonial_posttype' );
/* code end */
/* Custom Post Type Start */

// function create_posttype() {
// register_post_type( 'Services',

// array(
//   'labels' => array(
//    'name' => __( 'services' ),
//    'singular_name' => __( 'Services' )
//   ),
//   'public' => true,
//   'has_archive' => false,
//   'rewrite' => array('slug' => 'services'),
//  )
// );
// }
// add_action( 'init', 'create_posttype' );


/* Custom Post Type End */
/*Custom Post type start*/

// function cw_post_type_services() {

 

// $supports = array(
// 'title', 
// 'editor', 
// 'author', 
// 'thumbnail', 
// 'excerpt', 
// 'custom-fields',
// 'category', 
// 'comments', 
// 'revisions', 
// 'post-formats', 
// );

// $labels = array(
// 'name' => _x('services', 'plural'),
// 'singular_name' => _x('services', 'singular'),
// 'menu_name' => _x('services', 'admin menu'),
// 'name_admin_bar' => _x('services', 'admin bar'),
// 'add_new' => _x('Add New', 'add new'),
// 'add_new_item' => __('Add New services'),
// 'new_item' => __('New services'),
// 'edit_item' => __('Edit services'),
// 'view_item' => __('View services'),
// 'all_items' => __('All services'),
// 'search_items' => __('Search services'),
// 'not_found' => __('No services found.'),
// );



// $args = array(
// 'supports' => $supports,
// 'labels' => $labels,
// 'public' => true,
// 'query_var' => true,
// 'rewrite' => array('slug' => 'services'),
// 'has_archive' => true,
// 'hierarchical' => false,
// );
// register_post_type('services', $args);
// }
// add_action('init', 'cw_post_type_services');

/*Custom Post type end*/

function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Services', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Services', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Services', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Service', 'twentythirteen' ),
        'all_items'           => __( 'All Services', 'twentythirteen' ),
        'view_item'           => __( 'View Service', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Services', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Service', 'twentythirteen' ),
        'update_item'         => __( 'Update Service', 'twentythirteen' ),
        'search_items'        => __( 'Search Services', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Services', 'twentythirteen' ),
        'description'         => __( 'Service news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
         
        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'category' ),
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Services', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'Services'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
}
function my_widget(){
    register_sidebar( array(
        'name' => __( 'footer-widget1', 'testing' ),
        'id' => 'sidebar-1',
        'description' => __( 'This is description', 'yourtheme' ),
        'before_widget' => '',
        'after_widget' => '',
        'title' => 'FALSE',
        
    ) );
}
add_action( 'widgets_init', 'my_widget' );

function my_widget1(){
    register_sidebar( array(
        'name' => __( 'footer-widget2', 'testing' ),
        'id' => 'sidebar-2',
        'description' => __( 'This is description', 'yourtheme' ),
        'before_widget' => '',
        'after_widget' => '',
        'title' => 'FALSE',
        
    ) );
}
add_action( 'widgets_init', 'my_widget1' );

