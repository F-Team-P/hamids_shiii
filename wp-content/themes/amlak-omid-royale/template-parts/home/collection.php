<?php
/**
 * Royale home: signature collection (horizontal scroller).
 *
 * @package Amlak_Omid_Royale
 */

$mono = amlak_omid_svg( 'monogram' );
$query = new WP_Query( array( 'post_type' => 'property', 'posts_per_page' => 8, 'post_status' => 'publish' ) );
?>
<section class="r-section r-collection" id="collection" aria-labelledby="r-collection-title">
	<div class="r-container">
		<div class="r-collection__head r-reveal">
			<div>
				<span class="r-eyebrow"><?php esc_html_e( 'مجموعهٔ منتخب', 'amlak-omid' ); ?></span>
				<h2 id="r-collection-title"><?php esc_html_e( 'نفیس‌ترین‌های این فصل', 'amlak-omid' ); ?></h2>
				<p><?php esc_html_e( 'گزیده‌ای از املاک استثنایی، انتخاب‌شده با وسواس مشاوران ارشد ما.', 'amlak-omid' ); ?></p>
			</div>
			<a class="r-link" href="<?php echo esc_url( get_post_type_archive_link( 'property' ) ? get_post_type_archive_link( 'property' ) : home_url( '/amlak' ) ); ?>"><?php esc_html_e( 'تمام مجموعه', 'amlak-omid' ); ?></a>
		</div>
	</div>

	<div class="r-container">
		<div class="r-scroller" tabindex="0" role="region" aria-label="<?php esc_attr_e( 'فهرست املاک منتخب — برای پیمایش بکشید', 'amlak-omid' ); ?>">
			<?php if ( $query->have_posts() ) : ?>
				<?php
				while ( $query->have_posts() ) :
					$query->the_post();
					$badge = get_post_meta( get_the_ID(), '_amlak_badge', true );
					$price = get_post_meta( get_the_ID(), '_amlak_price', true );
					$area  = get_post_meta( get_the_ID(), '_amlak_area', true );
					$rooms = get_post_meta( get_the_ID(), '_amlak_rooms', true );
					$loc   = wp_strip_all_tags( get_the_term_list( get_the_ID(), 'property_location', '', '، ' ) );
					?>
					<a class="r-estate" href="<?php the_permalink(); ?>">
						<div class="r-estate__media">
							<?php if ( $badge ) : ?><span class="r-estate__badge"><?php echo esc_html( $badge ); ?></span><?php endif; ?>
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
							<span class="r-estate__meta"><?php
								$bits = array();
								if ( $area )  { $bits[] = amlak_omid_fa_num( $area ) . ' متر'; }
								if ( $rooms ) { $bits[] = amlak_omid_fa_num( $rooms ) . ' خواب'; }
								echo esc_html( implode( ' · ', $bits ) );
							?></span>
							<span class="r-estate__price"><?php echo $price ? esc_html( amlak_omid_fa_num( $price ) ) . ' <small>تومان</small>' : esc_html__( 'توافقی', 'amlak-omid' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
						</div>
					</a>
					<?php
				endwhile;
				wp_reset_postdata();
				?>
			<?php else : ?>
				<?php
				$demo = array(
					array( 'عمارت باغ‌دار', 'الهیه', '۴۸۰ متر · ۵ خواب', '۹۵ میلیارد', 'فروش ویژه' ),
					array( 'پنت‌هاوس رو به دربند', 'فرمانیه', '۳۲۰ متر · ۴ خواب', '۶۲ میلیارد', 'فروش' ),
					array( 'دوبلکس کلاسیک', 'نیاوران', '۲۹۰ متر · ۴ خواب', '۴۸ میلیارد', 'فروش' ),
					array( 'آپارتمان لوکس', 'زعفرانیه', '۲۱۰ متر · ۳ خواب', '۳۸ میلیارد', 'فروش' ),
					array( 'برج‌باغ مدرن', 'کامرانیه', '۲۶۰ متر · ۳ خواب', '۲۸۰ میلیون', 'اجاره' ),
					array( 'ویلای ساحلی', 'رویان', '۵۲۰ متر · ۵ خواب', '۷۰ میلیارد', 'فروش' ),
				);
				foreach ( $demo as $d ) :
					?>
					<a class="r-estate" href="#invite">
						<div class="r-estate__media">
							<span class="r-estate__badge"><?php echo esc_html( $d[4] ); ?></span>
							<span class="r-estate__mono" aria-hidden="true"><?php echo $mono; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
							<span class="r-estate__cap">
								<span class="r-estate__loc"><?php echo esc_html( $d[1] ); ?></span>
								<span class="r-estate__name"><?php echo esc_html( $d[0] ); ?></span>
							</span>
						</div>
						<div class="r-estate__body">
							<span class="r-estate__meta"><?php echo esc_html( $d[2] ); ?></span>
							<span class="r-estate__price"><?php echo esc_html( $d[3] ); ?> <small>تومان</small></span>
						</div>
					</a>
					<?php
				endforeach;
				?>
			<?php endif; ?>
		</div>

		<div class="r-scroller-foot r-reveal">
			<span class="r-estate__meta"><?php esc_html_e( 'برای دیدن بیشتر، بکشید یا از فلش‌ها استفاده کنید', 'amlak-omid' ); ?></span>
			<div class="r-scroller__nav">
				<button type="button" data-scroll="prev" aria-label="<?php esc_attr_e( 'قبلی', 'amlak-omid' ); ?>">→</button>
				<button type="button" data-scroll="next" aria-label="<?php esc_attr_e( 'بعدی', 'amlak-omid' ); ?>">←</button>
			</div>
		</div>
	</div>
</section>
