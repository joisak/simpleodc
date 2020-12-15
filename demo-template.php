<?php

/**
 * Template Name: Demo Template
 *
 * This is custom template, that you can select from template option when adding new page/post/custom-post.
 * To modify template, simply rename this file and change Template Name below
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<? 
	$url = $_SERVER['REQUEST_URI'];
	$isUserLoggedIn = is_user_logged_in();
?>

<?php get_header(); ?>

<main class="full-width">
	<div id="main-content" class="<?php if($isUserLoggedIn){echo 'user-is-logged-in'; } ?> main-content-position">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part( 'resources/templates/content/demo', 'page' ); ?>		
		<? endwhile; 
		else : ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>