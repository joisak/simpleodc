<?php

/**
 * <header> content with top-nav content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<header class="header">

    <!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
    <!-- This example requires Tailwind CSS v1.4.0+ -->
    <div class="relative bg-white border-b-2 border-gray-100 ">
        <div class="container max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center py-6 md:space-x-10">
                <div class="lg:w-0 lg:flex-1">
                    <a href="/" class="flex">
                        <img src="<?php echo esc_html(get_template_directory_uri()); ?>/public/images/simpledoc_.svg" class="logo" alt="logo" />
                    </a>
                </div>
                <div class="header-nav invisible md:visible">
                    <?php echo esc_html(wp_nav_menu()); ?>
                    <a href=""> Logga in </a>
                </div>
                <div id="header-menu-icon" class="block md:hidden">
                    <div id="nav-icon3">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="mobile-menu">
        <?php echo esc_html(wp_nav_menu()); ?>
        <a href=""> Logga in </a>
    </div>




</header>