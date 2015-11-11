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

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

			<?php get_template_part( 'template-parts/splash' ); ?>

			<div class="intro-wrap wrap white">

				<section class="intro" aria-labelledby="intro-section-title">

				<div class="row">

					<div class="col sm12">

						<?php while ( have_posts() ) : the_post(); ?>

							<div class="entry-content">

								<?php do_action( 'kapow_website_before_post_content' ); ?>

								<?php the_content(); ?>
								<?php edit_post_link( esc_html__( 'Edit', 'kapow-website' ), '<span class="edit-link">', '</span>' ); ?>

								<?php do_action( 'kapow_website_after_post_content' ); ?>

							</div><!-- .entry-content -->

						<?php endwhile; ?>

					</div>

				</section>

			</div>

			<?php get_template_part( 'template-parts/sections' ); ?>

		</article><!-- #post-## -->

		<?php do_action( 'kapow_website_after_main_content' ); ?>

	</main><!-- .site-main -->

<?php get_footer(); ?>
