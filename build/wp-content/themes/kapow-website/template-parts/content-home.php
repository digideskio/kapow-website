<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kapow Website
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

	<div class="entry-content">

		<?php do_action( 'kapow_website_before_post_content' ); ?>

		<?php the_content(); ?>

		<?php do_action( 'kapow_website_after_post_content' ); ?>


	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( esc_html__( 'Edit', 'kapow-website' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

