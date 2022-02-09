<?php
// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

    if (!function_exists('chld_thm_cfg_locale_css')) :
        function chld_thm_cfg_locale_css($uri)
        {
            if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
                $uri = get_template_directory_uri() . '/rtl.css';
            return $uri;
        }
    endif;
    add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');
    
    if (!function_exists('child_theme_configurator_css')) :
        function child_theme_configurator_css()
        {
            wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('neve-style', 'neve-style'));
        }
    endif;
    add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 100);
    
// END ENQUEUE PARENT ACTION

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

/**
 * Theme setup.
 */
function tailpress_setup()
{
    add_theme_support('title-tag');

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');

    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'tailpress_setup');

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts()
{
    $theme = wp_get_theme();

    wp_enqueue_style('tailpress', tailpress_asset('css/app.css'), array(), $theme->get('Version'));
    wp_enqueue_script('tailpress', tailpress_asset('js/app.js'), array(), $theme->get('Version'));
    
    /**
     * Base Styles
     * Must Use tailpress_asset() for dynamic paths to the correct folder.
     */
    wp_enqueue_style('banner-style', tailpress_asset('css/base/banners.css'), array(), $theme->get('Version'));

    /**
     * Base Scripts
     * Must Use tailpress_asset() for dynamic paths to the correct folder.
     */
    wp_enqueue_script('main-style', tailpress_asset('resources/js/main.js'), array('jquery'), $theme->get('Version'), true);
    wp_enqueue_script('product-page-style', tailpress_asset('resources/js/product-page.js'), array('jquery'), $theme->get('Version'), true);
    wp_enqueue_script('collapsible', tailpress_asset('resources/js/collapsible.js'), array('jquery'), $theme->get('Version'), true);
    
    /**
     * Thirdparty css and script files
     */
    
    // jQuery
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0');
    // Font Awesome
    wp_enqueue_style("icpdas-fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css", array(), "6.0.0", "all");
    wp_enqueue_script('icpdas-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js", array(), "6.0.0", true);
    // TailwindCSS PlayCDN - Developer use only
    // wp_enqueue_script('tailwindcdn', "https://cdn.tailwindcss.com", array(), "1.0.0", true);

}

add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');

/**
 * Adds woocommerce support in theme.
 */
function tailpress_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'tailpress_add_woocommerce_support');


/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset($path)
{
    if (wp_get_environment_type() === 'production') {
        return get_stylesheet_directory_uri() . '/' . $path;
    }

    return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
}







remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

function woocommerce_template_product_description()
{

    woocommerce_get_template('single-product/tabs/description.php');
}
add_action('woocommerce_after_single_product_summary', 'woocommerce_template_product_description', 10);

function woocommerce_template_product_reviews()
{

    comments_template('', true);
    // woocommerce_get_template( 'single-product-reviews.php' );

}
add_action('woocommerce_after_single_product_summary', 'woocommerce_template_product_reviews', 25);

add_filter( 'widget_text', 'do_shortcode' );