<?php

/**
 * Template Name: Start page
 *
 * This is custom template, that you can select from template option when adding new page/post/custom-post.
 * To modify template, simply rename this file and change Template Name below
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<? 
	$url = $_SERVER['REQUEST_URI'];
	
    $link = $_SERVER['REQUEST_URI'];
    $link_array = explode('/',$link);
    $page = basename($url);
	$isUserLoggedIn = is_user_logged_in();
?>

<?php get_header(); ?>

<main class="full-width">
	<div id="main-content" class="<?php if($isUserLoggedIn){echo 'user-is-logged-in'; } ?>">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<? if(site_url()|| $page === 'boka-demo')  : ?>
				<?php get_template_part( 'resources/templates/content/start', 'page' ); ?>		
			<? endif ?>
		<? endwhile; 
		else : ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>