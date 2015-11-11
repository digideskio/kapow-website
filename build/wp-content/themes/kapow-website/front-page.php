<?php
/**
 * The template for displaying the front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kapow Website
 */

get_header(); ?>

	<?php do_action( 'kapow_website_front_page_intro' ); ?>

	<main class="site-main" role="main">

		<?php do_action( 'kapow_website_before_main_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; ?>

		<?php do_action( 'kapow_website_after_main_content' ); ?>

	</main><!-- .site-main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
