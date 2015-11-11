<?php
/**
 * Sections
 *
 * @package Kapow Website
 */
$section_data = get_post_meta( get_the_id(), 'home-section', false );

$i = 1;
foreach ( $section_data as $section ) {

	if ( ! empty( $section['section-title'] ) && ! empty( $section['section-content'] ) ) { // && ! empty( $section['section-image']

		$number = ( 0 === $i % 2 ) ? 'even': 'odd';

		$title   = $section['section-title'];
		$content = apply_filters( 'the-content', $section['section-content'] );
		$image   = wp_get_attachment_image_src( $section['section-image'], 'icon' )[0];
		$link    = $section['section-button-one-link'];
		$label   = $section['section-button-one-label'];

	?>

	<div class="kapow-section-<?php echo esc_attr( $i ); ?>-wrap wrap <?php echo esc_attr( $number ); ?>">

		<section class="kapow-section" aria-labelledby="kapow-section-<?php echo esc_attr( $i ); ?>-title">

			<div class="row section-title">

				<div class="col sm12">

					<h2 id="kapow-section-<?php echo esc_attr( $i ); ?>-title" class="section-title"><?php echo esc_html( $title ); ?></h2>

				</div>

			</div>

			<div class="row section-content">

			<?php if ( 'odd' === $number && ! empty( $image ) ) { ?>

				<div class="col sm9">
					<img class="section-img mobile-only" src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" />
					<?php echo wp_kses_post( wpautop( $content ) ); ?>
				</div>

				<div class="col sm3">
					<img class="section-img" src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" />
				</div>

			<?php } elseif ( 'even' === $number && ! empty( $image ) ) { ?>

				<div class="col sm3">
					<img class="section-img" src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" />
				</div>

				<div class="col sm9">
					<?php echo wp_kses_post( wpautop( $content ) ); ?>
				</div>

			<?php } else { ?>

				<div class="col sm12">
					<?php echo wp_kses_post( wpautop( $content ) ); ?>
				</div>

			<?php } ?>

			</div>

			<?php if ( ! empty( $link ) && ! empty( $label ) ) { ?>
				<div class="row section-link">

					<div class="col sm12">

						<a href="<?php echo esc_url( $link ); ?>" title="Click to <?php echo esc_attr( $label ); ?>"><?php echo esc_attr( $label ); ?></a>

					</div>

				</div>
			<?php } ?>

		</section>

	</div>

	<?php
	}
	$i++;
}
?>


