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
    <div class="relative bg-white">
        <div class="container max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="lg:w-0 lg:flex-1">
                    <a href="/" class="flex">
                        <img src="<?php echo esc_html(get_template_directory_uri()); ?>/public/images/simpledoc_blue_logo_inc-xspace.png" class="logo" alt="logo" />
                    </a>
                </div>
                <div class="header-nav">
                    <?php echo esc_html(wp_nav_menu()); ?>
                    <a href=""> Logga in </a>
                </div>
            </div>

        </div>
    </div>




</header>