<?php

/**
 * <header> content with top-nav content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

$isUserLoggedIn = is_user_logged_in();
?>

<header id="header">

    <!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
    <!-- This example requires Tailwind CSS v1.4.0+ -->
    <div class="container">
        <div class="<?php if ($isUserLoggedIn) {
                        echo 'user-is-logged-in';
                    } ?> header">

            <div class="logo">
                <a href="<?= home_url() ?>" class="img-fluid">
                    <img class="white" src="<?php echo esc_html(get_template_directory_uri()); ?>/public/images/simpledoc_symbol.png" class="logo" alt="logo" />
                    <img class="dark" src="<?php echo esc_html(get_template_directory_uri()); ?>/public/images/simpledoc_symbol.png" class="logo" alt="logo" />
                </a>
            </div>

            <div class="header-nav">
                <div class="">
                    <?php echo esc_html(wp_nav_menu()); ?>
                </div>
                <div>
                    <a href="https://simpledoc.online/"><img class="header-icon" src="<?php echo esc_html(get_template_directory_uri()); ?>/public/images/user.svg" /> <span>Logga in</span> </a>
                    <img class="header-icon" src="<?php echo esc_html(get_template_directory_uri()); ?>/public/images/world.svg" /> <?php echo do_shortcode('[google-translator]'); ?>
                </div>
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
    <div id="mobile-menu" class="hide">
        <div class="menu"><?php echo esc_html(wp_nav_menu()); ?></div>
        <div class="bottom-menu">
            <a href="https://simpledoc.online/"><img class="header-icon" src="<?php echo esc_html(get_template_directory_uri()); ?>/public/images/user.svg" /> <span>Logga in</span> </a>
            <img class="header-icon" src="<?php echo esc_html(get_template_directory_uri()); ?>/public/images/world.svg" /> <?php echo do_shortcode('[google-translator]'); ?>
        </div>
    </div>




</header>