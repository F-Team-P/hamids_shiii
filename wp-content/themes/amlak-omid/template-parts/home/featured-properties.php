<?php
/**
 * Home section: Featured properties (املاک ویژه).
 *
 * Shows real `property` posts when available; otherwise falls back to
 * demo listings so the home page looks complete on a fresh install.
 *
 * @package Amlak_Omid
 */

$query = new WP_Query( array(
	'post_type'      => 'property',
	'posts_per_page' => 6,
	'post_status'    => 'publish',
) );
?>
<section class="section" id="featured" aria-labelledby="featured-title">
	<div class="container">
		<div class="heading reveal">
			<span class="eyebrow"><?php esc_html_e( 'املاک ویژه', 'amlak-omid' ); ?></span>
			<h2 id="featured-title"><?php esc_html_e( 'منتخب پیشنهادهای ما برای شما', 'amlak-omid' ); ?></h2>
			<p><?php esc_html_e( 'گزیده‌ای از بهترین فرصت‌های روز بازار، گردآوری‌شده توسط مشاوران باتجربهٔ ما.', 'amlak-omid' ); ?></p>
			<span class="rule"></span>
		</div>

		<div class="props__grid">
			<?php if ( $query->have_posts() ) : ?>
				<?php
				while ( $query->have_posts() ) :
					$query->the_post();
					$badge = get_post_meta( get_the_ID(), '_amlak_badge', true );
					$price = get_post_meta( get_the_ID(), '_amlak_price', true );
					$area  = get_post_meta( get_the_ID(), '_amlak_area', true );
					$rooms = get_post_meta( get_the_ID(), '_amlak_rooms', true );
					$loc   = wp_strip_all_tags( get_the_term_list( get_the_ID(), 'property_location', '', '، ' ) );
					$is_rent = ( false !== mb_strpos( (string) $badge, 'اجاره' ) || false !== mb_strpos( (string) $badge, 'رهن' ) );
					?>
					<article class="prop-card reveal">
						<a class="prop-card__media" href="<?php the_permalink(); ?>">
							<?php if ( $badge ) : ?>
								<span class="prop-card__badge <?php echo $is_rent ? 'prop-card__badge--rent' : ''; ?>"><?php echo esc_html( $badge ); ?></span>
							<?php endif; ?>
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'medium_large' ); ?>
							<?php else : ?>
								<span class="ph-icon" aria-hidden="true">
									<svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M3 11l9-7 9 7"/><path d="M5 10v10h14V10"/></svg>
								</span>
							<?php endif; ?>
						</a>
						<div class="prop-card__body">
							<?php if ( $loc ) : ?>
								<span class="prop-card__loc">📍 <?php echo esc_html( $loc ); ?></span>
							<?php endif; ?>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="prop-card__feats">
								<?php if ( $area ) : ?><span>📐 <?php echo esc_html( amlak_omid_fa_num( $area ) ); ?> متر</span><?php endif; ?>
								<?php if ( $rooms ) : ?><span>🛏 <?php echo esc_html( amlak_omid_fa_num( $rooms ) ); ?> خواب</span><?php endif; ?>
							</div>
							<div class="prop-card__foot">
								<span class="prop-card__price">
									<?php echo $price ? esc_html( amlak_omid_fa_num( $price ) ) . ' <small>تومان</small>' : esc_html__( 'توافقی', 'amlak-omid' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
								</span>
								<a class="btn btn--ghost" href="<?php the_permalink(); ?>"><?php esc_html_e( 'جزئیات', 'amlak-omid' ); ?></a>
							</div>
						</div>
					</article>
					<?php
				endwhile;
				wp_reset_postdata();
				?>

			<?php else : ?>
				<?php
				// --- Demo listings (no `property` posts yet) ---
				$demo = array(
					array( 'آپارتمان نوساز و لوکس', 'سعادت‌آباد', '۱۴۵', '۳', '۸٬۵۰۰٬۰۰۰٬۰۰۰', 'فروش', false ),
					array( 'واحد دنج با نور عالی', 'یوسف‌آباد', '۹۲', '۲', '۴۵٬۰۰۰٬۰۰۰', 'اجاره', true ),
					array( 'خانه ویلایی دوبلکس', 'نیاوران', '۳۲۰', '۴', '۲۸٬۰۰۰٬۰۰۰٬۰۰۰', 'فروش', false ),
					array( 'دفتر کار اداری', 'میدان ونک', '۷۸', '۲', '۱۲۰٬۰۰۰٬۰۰۰', 'رهن', true ),
					array( 'پنت‌هاوس رو به شهر', 'فرمانیه', '۲۱۰', '۳', '۱۹٬۰۰۰٬۰۰۰٬۰۰۰', 'فروش', false ),
					array( 'آپارتمان خانوادگی', 'سعادت‌آباد', '۱۲۰', '۳', '۶٬۲۰۰٬۰۰۰٬۰۰۰', 'فروش', false ),
				);
				foreach ( $demo as $d ) :
					?>
					<article class="prop-card reveal">
						<div class="prop-card__media">
							<span class="prop-card__badge <?php echo $d[6] ? 'prop-card__badge--rent' : ''; ?>"><?php echo esc_html( $d[5] ); ?></span>
							<span class="ph-icon" aria-hidden="true">
								<svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M3 11l9-7 9 7"/><path d="M5 10v10h14V10"/></svg>
							</span>
						</div>
						<div class="prop-card__body">
							<span class="prop-card__loc">📍 <?php echo esc_html( $d[1] ); ?></span>
							<h3><?php echo esc_html( $d[0] ); ?></h3>
							<div class="prop-card__feats">
								<span>📐 <?php echo esc_html( $d[2] ); ?> متر</span>
								<span>🛏 <?php echo esc_html( $d[3] ); ?> خواب</span>
							</div>
							<div class="prop-card__foot">
								<span class="prop-card__price"><?php echo esc_html( $d[4] ); ?> <small>تومان</small></span>
								<a class="btn btn--ghost" href="#contact"><?php esc_html_e( 'جزئیات', 'amlak-omid' ); ?></a>
							</div>
						</div>
					</article>
					<?php
				endforeach;
				?>
			<?php endif; ?>
		</div>

		<div class="props__more reveal">
			<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/amlak' ) ); ?>"><?php esc_html_e( 'مشاهدهٔ همهٔ املاک', 'amlak-omid' ); ?></a>
		</div>
	</div>
</section>
