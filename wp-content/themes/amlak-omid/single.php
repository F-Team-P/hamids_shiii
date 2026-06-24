<?php
/**
 * Single post / single property template.
 *
 * @package Amlak_Omid
 */

get_header();
?>

<div class="section">
	<div class="container" style="max-width:900px">
		<?php
		while ( have_posts() ) :
			the_post();
			$is_property = ( 'property' === get_post_type() );
			?>
			<article <?php post_class(); ?>>
				<div class="heading">
					<?php if ( $is_property ) : ?>
						<span class="eyebrow"><?php echo esc_html( get_the_term_list( get_the_ID(), 'property_location', '', '، ' ) ?: __( 'ملک', 'amlak-omid' ) ); ?></span>
					<?php endif; ?>
					<h2><?php the_title(); ?></h2>
					<span class="rule"></span>
				</div>

				<?php if ( has_post_thumbnail() ) : ?>
					<div style="border-radius:var(--radius);overflow:hidden;margin-bottom:1.8rem;box-shadow:var(--shadow-md)">
						<?php the_post_thumbnail( 'large' ); ?>
					</div>
				<?php endif; ?>

				<?php if ( $is_property ) : ?>
					<div class="prop-card__feats" style="justify-content:center;border:none;font-size:1rem">
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
								printf(
									'<span><strong>%s:</strong> %s</span>',
									esc_html( $label ),
									esc_html( amlak_omid_fa_num( $val ) )
								);
							}
						}
						?>
					</div>
				<?php endif; ?>

				<div class="entry-content">
					<?php
					the_content();
					wp_link_pages();
					?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</div>

<?php
get_footer();
