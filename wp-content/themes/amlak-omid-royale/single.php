<?php
/**
 * Royale single post / property template.
 *
 * @package Amlak_Omid_Royale
 */

get_header();
?>
<section class="r-section">
	<div class="r-container">
		<?php
		while ( have_posts() ) :
			the_post();
			$is_property = ( 'property' === get_post_type() );
			?>
			<article <?php post_class(); ?>>
				<div class="r-pagehead r-reveal">
					<?php if ( $is_property ) : ?>
						<?php $loc = wp_strip_all_tags( get_the_term_list( get_the_ID(), 'property_location', '', '، ' ) ); ?>
						<span class="r-eyebrow" style="justify-content:center"><?php echo esc_html( $loc ? $loc : __( 'ملک', 'amlak-omid' ) ); ?></span>
					<?php endif; ?>
					<h1><?php the_title(); ?></h1>
				</div>

				<?php if ( $is_property ) : ?>
					<div class="r-meta-row">
						<?php
						$meta = array(
							'_amlak_price' => __( 'قیمت', 'amlak-omid' ),
							'_amlak_area'  => __( 'متراژ', 'amlak-omid' ),
							'_amlak_rooms' => __( 'اتاق', 'amlak-omid' ),
							'_amlak_year'  => __( 'سال ساخت', 'amlak-omid' ),
						);
						foreach ( $meta as $key => $label ) {
							$val = get_post_meta( get_the_ID(), $key, true );
							if ( $val ) {
								printf( '<span><b style="color:var(--gold)">%s:</b> %s</span>', esc_html( $label ), esc_html( amlak_omid_fa_num( $val ) ) );
							}
						}
						?>
					</div>
				<?php endif; ?>

				<?php if ( has_post_thumbnail() ) : ?>
					<div class="r-prose" style="margin-bottom:2rem"><?php the_post_thumbnail( 'large', array( 'style' => 'width:100%' ) ); ?></div>
				<?php endif; ?>

				<div class="r-prose">
					<?php
					the_content();
					wp_link_pages();
					?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</section>
<?php
get_footer();
