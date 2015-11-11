<?php
/**
 * The template for displaying all single posts/pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kapow Website
 */

get_header(); ?>

	<main class="site-main" role="main">

		<?php do_action( 'kapow_website_before_main_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', get_post_type() ); ?>

			<?php the_post_navigation(); ?>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endwhile; ?>

		<?php do_action( 'kapow_website_after_main_content' ); ?>

	</main><!-- .site-main -->

<?php get_footer(); ?>
