<?php
/**
 * Motion fallback / archive template.
 *
 * @package Amlak_Omid_Motion
 */
get_header();
?>
<section class="m-section">
	<div class="m-container">
		<?php if ( have_posts() ) : ?>
			<div class="m-pagehead m-reveal">
				<span class="m-eyebrow"><?php esc_html_e( 'املاک امید', 'amlak-omid' ); ?></span>
				<h1><?php is_home() ? esc_html_e( 'یادداشت‌ها', 'amlak-omid' ) : the_archive_title(); ?></h1>
			</div>
			<div class="m-grid" data-stagger>
				<?php
				while ( have_posts() ) :
					the_post();
					$is_property = ( 'property' === get_post_type() );
					$price = $is_property ? get_post_meta( get_the_ID(), '_amlak_price', true ) : '';
					$loc   = $is_property ? wp_strip_all_tags( get_the_term_list( get_the_ID(), 'property_location', '', '، ' ) ) : '';
					?>
					<a class="m-estate" href="<?php the_permalink(); ?>">
						<div class="m-estate__media">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php else : ?>
								<span class="m-estate__mono" aria-hidden="true">◆</span>
							<?php endif; ?>
						</div>
						<div class="m-estate__cap">
							<?php if ( $loc ) : ?><span class="m-estate__loc"><?php echo esc_html( $loc ); ?></span><?php endif; ?>
							<div class="m-estate__name"><?php the_title(); ?></div>
							<div class="m-estate__meta">
								<?php if ( $price ) : ?><span>💎 <?php echo esc_html( amlak_omid_fa_num( $price ) ); ?> تومان</span><?php else : ?><span><?php echo esc_html( wp_trim_words( get_the_excerpt(), 8 ) ); ?></span><?php endif; ?>
							</div>
						</div>
					</a>
					<?php
				endwhile;
				?>
			</div>
			<div class="m-pagination"><?php echo paginate_links( array( 'mid_size' => 1 ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
		<?php else : ?>
			<div class="m-pagehead">
				<h1><?php esc_html_e( 'موردی یافت نشد', 'amlak-omid' ); ?></h1>
				<p><?php esc_html_e( 'محتوایی برای نمایش وجود ندارد.', 'amlak-omid' ); ?></p>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();
