<?php
/**
 * Theme bootstrap file for Resume Refiner.
 *
 * @package ResumeRefiner
 */

define( 'RR_THEME_VERSION', '1.0.0' );

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'rr_theme_setup' ) ) {
    /**
     * Register theme supports and menus.
     */
    function rr_theme_setup() {
        load_theme_textdomain( 'resume-refiner', get_template_directory() . '/languages' );

        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-logo', array(
            'height'      => 80,
            'width'       => 200,
            'flex-height' => true,
            'flex-width'  => true,
        ) );
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'align-wide' );
        add_editor_style( 'assets/css/theme.css' );

        register_nav_menus(
            array(
                'primary' => __( 'Primary Menu', 'resume-refiner' ),
                'footer'  => __( 'Footer Menu', 'resume-refiner' ),
            )
        );
    }
}
add_action( 'after_setup_theme', 'rr_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function rr_theme_assets() {
    wp_enqueue_style( 'resume-refiner-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600&display=swap', array(), RR_THEME_VERSION );
    wp_enqueue_style( 'resume-refiner-style', get_stylesheet_uri(), array( 'resume-refiner-fonts' ), RR_THEME_VERSION );
    wp_enqueue_style( 'resume-refiner-theme', get_template_directory_uri() . '/assets/css/theme.css', array( 'resume-refiner-style' ), RR_THEME_VERSION );

    wp_enqueue_script( 'resume-refiner-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), RR_THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'rr_theme_assets' );

/**
 * Register widget areas.
 */
function rr_theme_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'Footer Column', 'resume-refiner' ),
            'id'            => 'footer-1',
            'description'   => __( 'Add widgets here to appear in the footer.', 'resume-refiner' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'rr_theme_widgets_init' );

/**
 * Helper: trimmed excerpt for cards.
 */
function rr_theme_excerpt( $length = 20 ) {
    return wp_trim_words( get_the_excerpt(), $length );
}

/**
 * Add custom image sizes for cards and hero mockups.
 */
add_action(
    'after_setup_theme',
    function () {
        add_image_size( 'rr-card', 600, 400, true );
    }
);

/**
 * Customize the read more link for excerpts.
 */
add_filter(
    'excerpt_more',
    function () {
        return ' ...';
    }
);
?>
