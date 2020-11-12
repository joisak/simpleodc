<?php

/**
 * Template Name: Basic Template
 *
 * This is custom template, that you can select from template option when adding new page/post/custom-post.
 * To modify template, simply rename this file and change Template Name below
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<?php get_header(); ?>

<main class="full-width">
	<div class="main-content container mx-auto px-4 sm:px-6">
		<h1><?php the_title(); ?></h1>

		<p>Basic Template</p>
	</div>
</main>

<?php get_footer(); ?>