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

<? 
	$url = $_SERVER['REQUEST_URI'];
?>

<?php get_header(); ?>

<main class="full-width">
	<div class="main-content container mx-auto px-4 sm:px-6">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<? if($url === '/')  : ?>
				<?php get_template_part( 'resources/templates/content/start', 'page' ); ?>		
			<? endif ?>
		<? endwhile; 
		else : ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>