<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kapow Website
 */

?>
		<?php do_action( 'kapow_website_after_main' ); ?>

	</div><!-- .site-content -->

	<?php do_action( 'kapow_website_before_footer' ); ?>

	<footer class="site-footer" role="contentinfo">

		<?php do_action( 'kapow_website_before_footer_content' ); ?>

		<div class="row">

			<div class="col sm12">

				<p><a href="<?php echo esc_url( __( 'https://kapow.io/', 'kapow-website' ) ); ?>"><?php printf( esc_html__( 'Built with %s', 'kapow-website' ), 'Kapow!' ); ?></a>
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kapow-website' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'kapow-website' ), 'WordPress' ); ?></a></p>
				<p><a href="<?php echo esc_url( __( 'https://makedo.net/', 'kapow-website' ) ); ?>"><?php printf( esc_html__( 'Created and maintained by %s', 'kapow-website' ), 'Make Do' ); ?></a></p></p>

			</div>

		</div>

		<?php do_action( 'kapow_website_after_footer_content' ); ?>

	</footer><!-- .site-footer -->

	<?php do_action( 'kapow_website_after_footer' ); ?>

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
