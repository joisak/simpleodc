<?php

/**
 * ------------------------------------------------------------------------
 * Theme's Includes
 * ------------------------------------------------------------------------
 * The `function.php` file is should responsible only for including theme's
 * components. Your theme custom logic should be distributed
 * across separate files in the `/src` directory.
 */

require_once 'src/styles.php';
require_once 'src/scripts.php';

require_once 'src/navs.php';
require_once 'src/supports.php';
require_once 'src/post-types.php';
require_once 'src/thumbnails.php';


function load_css()
{
    wp_enqueue_style('homepage-css', get_stylesheet_directory_uri() . '/public/css/app.css', array(), 0.256, 'all');
}
add_action('wp_print_styles', 'load_css', 99);
