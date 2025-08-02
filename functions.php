<?php
/**
 * Zenya Academy Theme functions and definitions
 *
 * @package Zenya_Academy
 */

if (!defined('ZENYA_THEME_VERSION')) {
    define('ZENYA_THEME_VERSION', '2.0.0');
}

if (!defined('ZENYA_THEME_PATH')) {
    define('ZENYA_THEME_PATH', get_template_directory());
}

if (!defined('ZENYA_THEME_URI')) {
    define('ZENYA_THEME_URI', get_template_directory_uri());
}

/**
 * Setup Theme
 */
function zenya_theme_setup() {
    // Make theme available for translation
    load_theme_textdomain('zenya', ZENYA_THEME_PATH . '/languages');
    
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');
    
    // Set default Post Thumbnail size
    set_post_thumbnail_size(1200, 630, true); // 16:9 aspect ratio
    
    // Add custom image sizes
    add_image_size('zenya-featured', 1200, 675, true); // 16:9 featured image
    add_image_size('zenya-thumbnail', 400, 225, true); // 16:9 thumbnail
    
    // Register navigation menus
    register_nav_menus(array(
        'primary'   => esc_html__('Primary Menu', 'zenya'),
        'footer'    => esc_html__('Footer Menu', 'zenya'),
        'mobile'    => esc_html__('Mobile Menu', 'zenya'),
        'social'    => esc_html__('Social Links', 'zenya')
    ));
    
    // Menü sınıflarını temizleme filtreleri kaldırıldı
    add_filter('nav_menu_item_id', '__return_null');

    // Remove all menu item descriptions
    add_filter('walker_nav_menu_start_el', 'zenya_remove_menu_descriptions', 10, 4);
    function zenya_remove_menu_descriptions($item_output, $item, $depth, $args) {
        // Remove any HTML comments that might contain additional menu data
        $item_output = preg_replace('/<!--.*?-->/s', '', $item_output);
        
        // Remove any inline styles that might be adding arrows
        $item_output = preg_replace('/style=[\'\"].*?[\'\"]/i', '', $item_output);
        
        // Remove any arrow spans or other elements
        $item_output = preg_replace('/<span[^>]*(class=[\'\"]?[^\'\"]*(arrow|chevron|angle|dropdown|toggle)[^\'\"]*[\'\"]?)[^>]*>.*?<\/span>/i', '', $item_output);
        $item_output = preg_replace('/<i[^>]*(class=[\'\"]?[^\'\"]*(fa-chevron|fa-angle|fa-caret|fa-arrow)[^\'\"]*[\'\"]?)[^>]*>.*?<\/i>/i', '', $item_output);
        
        // Remove any empty tags that might be left over
        $item_output = preg_replace('/<[^>]+>\s*<\/[^>]+>/', '', $item_output);
        
        return $item_output;
    }

    // Completely disable any menu item descriptions
    add_filter('nav_menu_description', '__return_empty_string');
    
    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
        'navigation-widgets',
    ));
    
    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');
    
    // Add support for core custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-width'  => true,
        'flex-height' => true,
        'header-text' => array('site-title', 'site-description'),
    ));
    
    // Add support for custom background
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ));
    
    // Add support for full and wide align images
    add_theme_support('align-wide');
    
    // Add support for responsive embedded content
    add_theme_support('responsive-embeds');
    
    // Add support for editor styles
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');
    
    // Add support for block styles
    add_theme_support('wp-block-styles');
    
    // Add support for default block styles
    add_theme_support('default-block-styling');
    
    // Add support for custom line height controls
    add_theme_support('custom-line-height');
    
    // Add support for custom units
    add_theme_support('custom-units');
    
    // Remove core block patterns
    remove_theme_support('core-block-patterns');
    
    // Add support for custom spacing
    add_theme_support('custom-spacing');
    
    // Add support for custom units like viewport units
    add_theme_support('custom-units');
}
add_action('after_setup_theme', 'zenya_theme_setup');

/**
 * Enqueue theme styles and scripts
 */
function zenya_scripts() {
    // Font Awesome - Sadece header'da yüklenecek şekilde düzenlendi
    if (!is_admin()) {
        wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');
    }
    
    // Google Fonts
    wp_enqueue_style('zenya-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600;700&display=swap', array(), null);
    
    // Theme stylesheet
    wp_enqueue_style('zenya-style', get_stylesheet_uri(), array('zenya-google-fonts'), ZENYA_THEME_VERSION);
    
    // Main stylesheet
    wp_enqueue_style('zenya-main', ZENYA_THEME_URI . '/assets/css/main.css', array('zenya-style'), ZENYA_THEME_VERSION);
    
    // Custom styles
    wp_enqueue_style('zenya-styles', ZENYA_THEME_URI . '/assets/css/zenya-styles.css', array('zenya-main'), ZENYA_THEME_VERSION);
    
    // Header styles (yüksek öncelikli olarak en son yüklenecek)
    wp_enqueue_style('zenya-header', ZENYA_THEME_URI . '/assets/css/layout/_header.css', array('zenya-styles'), ZENYA_THEME_VERSION);
    
    // Responsive styles (en son yüklenecek)
    wp_enqueue_style('zenya-responsive', ZENYA_THEME_URI . '/assets/css/responsive.css', array('zenya-header'), ZENYA_THEME_VERSION);
    
    // jQuery (WordPress'in kendi jQuery'sini kullanıyoruz)
    wp_enqueue_script('jquery');
    
    // Main JavaScript
    wp_enqueue_script(
        'zenya-main-js',
        ZENYA_THEME_URI . '/assets/js/main.js',
        array('jquery'),
        ZENYA_THEME_VERSION,
        true
    );
    
    // Localize script with AJAX and theme settings
    wp_localize_script('zenya-main-js', 'zenyaSettings', array(
        'ajaxurl'   => admin_url('admin-ajax.php'),
        'nonce'     => wp_create_nonce('zenya-nonce'),
        'isMobile'  => wp_is_mobile(),
        'themePath' => ZENYA_THEME_URI,
        'isRTL'     => is_rtl(),
    ));
    
    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    
    // Events Slider JS (sadece ihtiyaç duyulan sayfalarda yüklensin)
    if (is_page('etkinlikler') || is_singular('event')) {
        wp_enqueue_script(
            'zenya-events-slider',
            ZENYA_THEME_URI . '/assets/js/events-slider.js',
            array('jquery'),
            ZENYA_THEME_VERSION,
            true
        );
    }
    
    // Load Zenya Academy page specific styles and scripts
    if (is_page('zenya-academy')) {
        // Enqueue CSS
        wp_enqueue_style(
            'zenya-academy-style',
            ZENYA_THEME_URI . '/assets/css/zenya-academy.css',
            array(),
            ZENYA_THEME_VERSION
        );
        
        // Enqueue JavaScript
        wp_enqueue_script(
            'zenya-academy-script',
            ZENYA_THEME_URI . '/assets/js/zenya-academy.js',
            array('jquery'),
            ZENYA_THEME_VERSION,
            true
        );
        
        // Localize script with AJAX URL and nonce
        wp_localize_script('zenya-academy-script', 'zenyaAcademyVars', array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('zenya-academy-nonce'),
        ));
    }
}
add_action('wp_enqueue_scripts', 'zenya_scripts');

/**
 * Enqueue scripts and styles for the block editor
 */
function zenya_block_editor_assets() {
    // Enqueue block editor styles
    wp_enqueue_style(
        'zenya-editor-styles',
        ZENYA_THEME_URI . '/assets/css/editor.css',
        array('wp-edit-blocks'),
        ZENYA_THEME_VERSION
    );
    
    // Enqueue block editor script
    wp_enqueue_script(
        'zenya-editor-scripts',
        ZENYA_THEME_URI . '/assets/js/editor.js',
        array('wp-blocks', 'wp-dom-ready', 'wp-edit-post'),
        ZENYA_THEME_VERSION,
        true
    );
}
add_action('enqueue_block_editor_assets', 'zenya_block_editor_assets');

/**
 * Register widget areas
 */
function zenya_widgets_init() {
    // Define widget areas configuration
    $widget_areas = array(
        // Main Sidebar
        array(
            'name'          => esc_html__('Sidebar', 'zenya'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here to appear in your main sidebar.', 'zenya'),
            'before_widget' => '<div id="%1$s" class="widget %2$s mb-6">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title text-lg font-semibold mb-4 pb-2 border-b border-gray-200">',
            'after_title'   => '</h3>',
        ),
        // Header Widget Area
        array(
            'name'          => esc_html__('Header Widget Area', 'zenya'),
            'id'            => 'header-widget-area',
            'description'   => esc_html__('Add widgets here to appear in the header area.', 'zenya'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title sr-only">',
            'after_title'   => '</h3>',
        ),
        // Footer Widget Areas (4 columns)
        array(
            'name'          => esc_html__('Footer Widget Area 1', 'zenya'),
            'id'            => 'footer-1',
            'description'   => esc_html__('First footer widget area.', 'zenya'),
            'before_widget' => '<div id="%1$s" class="widget %2$s mb-6">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title text-lg font-semibold mb-4 pb-2 border-b border-gray-200">',
            'after_title'   => '</h4>',
        ),
        array(
            'name'          => esc_html__('Footer Widget Area 2', 'zenya'),
            'id'            => 'footer-2',
            'description'   => esc_html__('Second footer widget area.', 'zenya'),
            'before_widget' => '<div id="%1$s" class="widget %2$s mb-6">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title text-lg font-semibold mb-4 pb-2 border-b border-gray-200">',
            'after_title'   => '</h4>',
        ),
        array(
            'name'          => esc_html__('Footer Widget Area 3', 'zenya'),
            'id'            => 'footer-3',
            'description'   => esc_html__('Third footer widget area.', 'zenya'),
            'before_widget' => '<div id="%1$s" class="widget %2$s mb-6">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title text-lg font-semibold mb-4 pb-2 border-b border-gray-200">',
            'after_title'   => '</h4>',
        ),
        array(
            'name'          => esc_html__('Footer Widget Area 4', 'zenya'),
            'id'            => 'footer-4',
            'description'   => esc_html__('Fourth footer widget area.', 'zenya'),
            'before_widget' => '<div id="%1$s" class="widget %2$s mb-6">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title text-lg font-semibold mb-4 pb-2 border-b border-gray-200">',
            'after_title'   => '</h4>',
        ),
        // Below Content Widget Area
        array(
            'name'          => esc_html__('Below Content', 'zenya'),
            'id'            => 'below-content',
            'description'   => esc_html__('Widgets in this area will appear below the main content.', 'zenya'),
            'before_widget' => '<div id="%1$s" class="widget %2$s my-8">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title text-2xl font-bold mb-6 pb-2 border-b border-gray-200">',
            'after_title'   => '</h3>',
        ),
    );
    
    // WooCommerce specific widget areas
    if (class_exists('WooCommerce')) {
        $widget_areas = array_merge($widget_areas, array(
            array(
                'name'          => esc_html__('Shop Sidebar', 'zenya'),
                'id'            => 'shop-sidebar',
                'description'   => esc_html__('Add widgets here to appear in your WooCommerce shop sidebar.', 'zenya'),
                'before_widget' => '<div id="%1$s" class="widget %2$s mb-6">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title text-lg font-semibold mb-4 pb-2 border-b border-gray-200">',
                'after_title'   => '</h3>',
            ),
            array(
                'name'          => esc_html__('Shop Filters', 'zenya'),
                'id'            => 'shop-filters',
                'description'   => esc_html__('Add filter widgets here for the shop page.', 'zenya'),
                'before_widget' => '<div id="%1$s" class="widget %2$s mb-6">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title text-lg font-semibold mb-4 pb-2 border-b border-gray-200">',
                'after_title'   => '</h3>',
            ),
            array(
                'name'          => esc_html__('Single Product', 'zenya'),
                'id'            => 'single-product',
                'description'   => esc_html__('Add widgets here to appear on single product pages.', 'zenya'),
                'before_widget' => '<div id="%1$s" class="widget %2$s my-8">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title text-xl font-semibold mb-4 pb-2 border-b border-gray-200">',
                'after_title'   => '</h3>',
            ),
        ));
    }
    
    // Register all widget areas
    foreach ($widget_areas as $widget_area) {
        register_sidebar($widget_area);
    }
}
add_action('widgets_init', 'zenya_widgets_init');

/**
 * Custom template tags for this theme
 */
require ZENYA_THEME_PATH . '/inc/template-tags.php';

/**
 * Custom post types
 */
require ZENYA_THEME_PATH . '/inc/custom-post-types.php';

/**
 * Custom fields (ACF)
 */
if (class_exists('ACF')) {
    require ZENYA_THEME_PATH . '/inc/custom-fields.php';
}

/**
 * Theme options
 */
require ZENYA_THEME_PATH . '/inc/theme-options.php';

/**
 * Shortcodes
 */
require ZENYA_THEME_PATH . '/inc/shortcodes.php';

/**
 * Custom functions that act independently of the theme templates
 */
require ZENYA_THEME_PATH . '/inc/extras.php';

/**
 * Load Jetpack compatibility file
 */
if (defined('JETPACK__VERSION')) {
    require ZENYA_THEME_PATH . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file
 */
if (class_exists('WooCommerce')) {
    require ZENYA_THEME_PATH . '/inc/woocommerce.php';
}
