<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Kapow Website
 */

get_header(); ?>

	<main class="site-main" role="main">

	<?php do_action( 'kapow_website_before_main_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<?php the_post_navigation(); ?>

		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>

	<?php endwhile; // End of the loop. ?>

	<?php do_action( 'kapow_website_after_main_content' ); ?>

	</main><!-- .site-main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
