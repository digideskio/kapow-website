<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kapow! Website
 */

?>
		<?php do_action( 'kapow_website_after_main' ); ?>

	</div><!-- .site-content -->

	<?php do_action( 'kapow_website_before_footer' ); ?>

	<footer class="site-footer" role="contentinfo">

		<?php do_action( 'kapow_website_before_footer_content' ); ?>

		<div class="site-info">
		<p>&copy; <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'kapow-website' ); ?> <span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kapow-website' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'kapow-website' ), 'WordPress' ); ?></a></p>
		</div><!-- .site-info -->

		<?php do_action( 'kapow_website_after_footer_content' ); ?>

	</footer><!-- .site-footer -->

	<?php do_action( 'kapow_website_after_footer' ); ?>

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
