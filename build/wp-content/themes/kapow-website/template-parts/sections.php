<?php
/**
 * Sections
 *
 * @package Kapow Website
 */
$section_data = get_post_meta( get_the_id(), 'home-section', false );

$i = 1;
foreach ( $section_data as $section ) {

	if ( ! empty( $section['section-title'] ) && ! empty( $section['section-content'] ) ) {

		$number = ( 0 === $i % 2 ) ? 'even': 'odd';
		$anchor  = $section['section-anchor'];
		$title   = $section['section-title'];
		$image   = wp_get_attachment_image_src( $section['section-image'], 'icon' )[0];
		$link    = $section['section-button-one-link'];
		$label   = $section['section-button-one-label'];
		$content = $section['section-content'];

		// Tag the button onto the content - cleaner this way.
		if ( ! empty( $link ) && ! empty( $label ) ) {
			$content .= '<p><a class="section-link button" href="' . esc_url( $link ) . '" title="Click to ' . esc_attr( $label ) . '">' . esc_attr( $label ) . '</a></p>';
		}

		$content = apply_filters( 'the_content', $content );
	?>

	<div id="<?php echo esc_attr( $anchor ); ?>" class="kapow-section-<?php echo esc_attr( $i ); ?>-wrap wrap <?php echo esc_attr( $number ); ?>">

		<section class="kapow-section" aria-labelledby="kapow-section-<?php echo esc_attr( $i ); ?>-title">

			<div class="row">

				<div class="col sm12">

					<h2 id="kapow-section-<?php echo esc_attr( $i ); ?>-title" class="section-title"><?php echo esc_html( $title ); ?></h2>

				</div>

			</div>

			<div class="row">

			<?php if ( 'odd' === $number && ! empty( $image ) ) { ?>

				<div class="col sm9">

					<img class="section-img mobile-only" src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" />

					<div class="section-content">
						<?php echo wpautop( $content ); ?>
					</div>
				</div>

				<div class="col sm3">
					<img class="section-img desktop-only" src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" />
				</div>

			<?php } elseif ( 'even' === $number && ! empty( $image ) ) { ?>

				<div class="col sm3">
					<img class="section-img" src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" />
				</div>

				<div class="col sm9">
					<div class="section-content">
						<?php echo wpautop( $content ); ?>
					</div>
				</div>

			<?php } else { ?>

				<div class="col sm12">
					<div class="section-content">
						<?php echo wpautop( $content ); ?>
					</div>
				</div>

			<?php } ?>

			</div>

		</section>

	</div>

	<?php
	}
	$i++;
}
?>


