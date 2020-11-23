<?php

/**
 * <header> content with top-nav content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<header>

    <!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
    <!-- This example requires Tailwind CSS v1.4.0+ -->
    <div class="container">
        <div class="header">

            <div class="logo">
                <a href="/" class="img-fluid">
                    <img src="<?php echo esc_html(get_template_directory_uri()); ?>/public/images/simpledoc_.svg" class="logo" alt="logo" />
                </a>
            </div>
            <div class="header-nav">
                <?php echo esc_html(wp_nav_menu()); ?>
                <a href=""> Logga in </a>
            </div>
            <div id="header-menu-icon">
                <div id="nav-icon3">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>


        </div>
    </div>
    <div id="mobile-menu">
        <?php echo esc_html(wp_nav_menu()); ?>
        <a href=""> Logga in </a>
    </div>




</header>