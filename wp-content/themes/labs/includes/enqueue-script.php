<?php
class enqueueScripts {
    public static function styles_scripts() {
        // Favicon
        // wp_enqueue_style('favicon', get_template_directory_uri() .'/img/favicon.ico');
        
        // Google Fonts
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700');
        
        // Stylesheets
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/css/bootstrap.min.css');
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/vendor/css/font-awesome.min.css' );
        wp_enqueue_style('font-awesome-allmin', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.css ');
        wp_enqueue_style('flaticon', get_template_directory_uri() .  '/vendor/css/flaticon.css');
        wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/vendor/css/magnific-popup.css');
        wp_enqueue_style('owl', get_template_directory_uri() . '/vendor/css/owl.carousel.css');
        wp_enqueue_style('style', get_template_directory_uri() . '/vendor/css/style.css');
        wp_enqueue_style('personal-style', get_template_directory_uri() . '/vendor/css/personal-style.css');

        // ========== Javascripts & Jquery ==========

        wp_enqueue_script('jquery-labs', get_template_directory_uri() . '/vendor/js/jquery-2.1.4.min.js');
        wp_enqueue_script('bootstrap-labs', get_template_directory_uri() . '/vendor/js/bootstrap.min.js');
        wp_enqueue_script('magnific-popup-labs', get_template_directory_uri() . '/vendor/js/magnific-popup.min.js');
        wp_enqueue_script('owl-labs', get_template_directory_uri() . '/vendor/js/owl.carousel.min.js', ['bootstrap-labs'], null, true);
        wp_enqueue_script('circle-progress-labs', get_template_directory_uri() . '/vendor/js/circle-progress.min.js', ['jquery-labs']);
        wp_enqueue_script('main-labs', get_template_directory_uri() . '/vendor/js/main.js', ['jquery-labs'], null, true);
    }
}
add_action('wp_enqueue_scripts', [enqueueScripts::class, 'styles_scripts']);