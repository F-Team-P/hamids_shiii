<?php
/**
 * Royale fallback / archive template.
 *
 * @package Amlak_Omid_Royale
 */

get_header();
$mono = amlak_omid_svg( 'monogram' );
?>
<section class="r-section">
	<div class="r-container">
		<?php if ( have_posts() ) : ?>
			<div class="r-pagehead r-reveal">
				<span class="r-eyebrow" style="justify-content:center"><?php esc_html_e( 'املاک امید', 'amlak-omid' ); ?></span>
				<h1><?php is_home() ? esc_html_e( 'یادداشت‌ها و اخبار', 'amlak-omid' ) : the_archive_title(); ?></h1>
			</div>

			<div class="r-grid">
				<?php
				while ( have_posts() ) :
					the_post();
					$is_property = ( 'property' === get_post_type() );
					$price = $is_property ? get_post_meta( get_the_ID(), '_amlak_price', true ) : '';
					$loc   = $is_property ? wp_strip_all_tags( get_the_term_list( get_the_ID(), 'property_location', '', '، ' ) ) : '';
					?>
					<a class="r-estate" href="<?php the_permalink(); ?>">
						<div class="r-estate__media">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php else : ?>
								<span class="r-estate__mono" aria-hidden="true"><?php echo $mono; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
							<?php endif; ?>
							<span class="r-estate__cap">
								<?php if ( $loc ) : ?><span class="r-estate__loc"><?php echo esc_html( $loc ); ?></span><?php endif; ?>
								<span class="r-estate__name"><?php the_title(); ?></span>
							</span>
						</div>
						<div class="r-estate__body">
							<span class="r-estate__meta"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 9 ) ); ?></span>
							<?php if ( $price ) : ?><span class="r-estate__price"><?php echo esc_html( amlak_omid_fa_num( $price ) ); ?> <small>تومان</small></span><?php endif; ?>
						</div>
					</a>
					<?php
				endwhile;
				?>
			</div>

			<div class="r-pagination"><?php echo paginate_links( array( 'mid_size' => 1 ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>

		<?php else : ?>
			<div class="r-pagehead">
				<h1><?php esc_html_e( 'موردی یافت نشد', 'amlak-omid' ); ?></h1>
				<p><?php esc_html_e( 'محتوایی برای نمایش وجود ندارد.', 'amlak-omid' ); ?></p>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();
