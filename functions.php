<?php
/**
 * All our theme functions etc.
 *
 * @package Falcon633
 */

/**
 * Set theme up, also note here what we support feature wise.
 */
function falcon_setup() {

    // We don't supply a title tag in header.php
    add_theme_support( 'title-tag' );

    // Default posts/comments RSS feed links to head.
    // Note, comments might not be supported so could need updating
    add_theme_support( 'automatic-feed-links' );

    // Plan to add support for post thumbnails...
    add_theme_support( 'post-thumbnails' );

    // Header uses wp_nav_menu() at two points.
    register_nav_menus( array(
        'primary_nav'   => esc_html__( 'Primary Menu', 'falcon' ),
        'footer_nav'    => esc_html__( 'Footer Menu', 'falcon' ),
        'external_nav'  => esc_html__( 'External/Social Menu', 'falcon' ),
        'mobile_nav'    => esc_html__( 'Pull-down Main Mobile Menu', 'falcon' ),
        'mobile_contact'=> esc_html__( 'Speech-icon/contact Mobile Button', 'falcon' ),
    ) );

    /*
     * Use HTML5 standard markup for...
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ) );

    /*
     * Add support for styling quotes in a cool way
     * Other post formats listed: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array('quote') );
}
add_action( 'after_setup_theme', 'falcon_setup' );

/**
 * Register our only widget area
 */
function falcon_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Home Widget Area', 'falcon' ),
        'id'            => 'home-widgets-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => get_falcon_section_header_open(),
        'after_title'   => get_falcon_section_header_close(),
    ) );

}
add_action( 'widgets_init', 'falcon_widgets_init' );

/**
 * Load our theme styles.
 */
function falcon_scripts() {
    wp_enqueue_style( 'oppan-falcon-style', get_stylesheet_uri() );
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'falcon_scripts' );


/**
 * Set post mail handling (we use JetPack)
 *
 * Further examples can be found:
 * https://jetpack.com/support/subscriptions/#customize-confirmation
 */
add_filter( 'jetpack_allow_per_post_subscriptions', '__return_true' ); // allow per post override


function falcon_posted_on() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
    }

    $time_string = sprintf( $time_string,
        esc_attr( get_the_date( 'c' ) ),
        esc_html( get_the_date( 'd M Y') )
    );

    $posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';

    echo '<span class="posted-on">' . $posted_on . '</span>';
}

function falcon_pagination() {
    global $wp_query;

    $big = 999999999; // need an unlikely integer

    return '<div class="falcon-pagination-wrapper">'
        . paginate_links( array(
            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format'    => '?paged=%#%',
            'current'   => max( 1, get_query_var('paged') ),
            'total'     => $wp_query->max_num_pages,
            'prev_text' => __('« '),
            'next_text' => __(' »'),
        ) )
        . '</div>';
}

/* Use a shorter than normal excerpt length */
function custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 100);

// Replaces [..] with read on links
function modify_read_more_link() {
    return '<a class="read-more" href="' . get_permalink() . '">Read On</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

function new_excerpt_more($more) {
    global $post;
    return '... <a class="read-more" href="'. get_permalink($post->ID) . '">Read On</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/*
 * Take the blog title, assumed to a domain.
 * Find the first dot and use alternative colour for everything after this.
 * e.g. falkus _.co._, foo _.bar.uk_
 */
function site_heading_tag() {
    $name = get_bloginfo('name');
    $dot_post = strpos($name, '.');

    return '<h1>' . substr($name, 0, $dot_post) . '<span class="alternative-colour">' . substr($name, $dot_post) . '</span></h1>';
}

function falcon_indent_styles() { ?>
    <style>
    .indent-point {
        -webkit-clip-path: polygon(50% 0%, 100% 0, 100% 100%, 50% 0, 0 100%, 0 0);
        clip-path: polygon(50% 0%, 100% 0, 100% 100%, 50% 0, 0 100%, 0 0);
        -webkit-clip-path: url('#clip-indent');
        clip-path: url('#clip-indent');
    }
    .indent-fg {
        -webkit-clip-path: polygon(50% 0, 100% 100%, 100% 100%, 50% 100%, 0 100%, 0 100%);
        clip-path: polygon(50% 0, 100% 100%, 100% 100%, 50% 100%, 0 100%, 0 100%);
        -webkit-clip-path: url('#clip-outdent');
        clip-path: url('#clip-outdent');
    }
    </style>
<?php
}
add_action('wp_head', 'falcon_indent_styles');

function falcon_indent_svg() { ?>
    <svg class="svg-clip">
      <defs>
        <clipPath id="clip-indent" clipPathUnits="objectBoundingBox">
          <polygon points="0.5 0, 1 0, 1 1, 0.5 0, 0 1, 0 0" />
        </clipPath>
        <clipPath id="clip-outdent" clipPathUnits="objectBoundingBox">
          <polygon points="0.5 0, 1 1, 1 1, 0.5 1, 0 1, 0 1" />
        </clipPath>
      </defs>
    </svg>
<?php
}

/*
 * Try get the first URL from mobile_contact menu, failing that return the
 * homepage URL for this blog.
 */
function falcon_contact_url() {
    // mobile_contact is the specified menu we use for the contact button
    $locations = get_nav_menu_locations();
    $menu = get_term( $locations['mobile_contact'], 'nav_menu' );
    $menu_items = wp_get_nav_menu_items($menu->term_id);

    $return_url = FALSE;
    foreach ( $menu_items as $item ) {
        $return_url = $item->url;
    }
    if (!$return_url) {
        $return_url = get_bloginfo('url');
    }
    return $return_url;
}

function falcon_section_header_open($opt_class = '') {
    echo get_falcon_section_header_open($opt_class);
}

function get_falcon_section_header_open($opt_class = '') {
    $class = 'section-header';
    if ($opt_class) {
        $class .= ' ' . $opt_class;
    }
    return '<div class="' . $class . '">
    <div class="section-header-inner">';
}

function falcon_section_header_close() {
    echo get_falcon_section_header_close();
}

function get_falcon_section_header_close() {
    return '</div><div class="indent-bg">
        <div class="indent-fg indent-fg--white"></div>
    </div>
    </div>';
}
