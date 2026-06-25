<?php
/**
 * Motion home: scroll-pinned horizontal property showcase.
 *
 * @package Amlak_Omid_Motion
 */
$query = new WP_Query( array( 'post_type' => 'property', 'posts_per_page' => 8, 'post_status' => 'publish' ) );
?>
<section class="m-showcase" id="showcase" aria-labelledby="m-showcase-title">
	<div class="m-showcase__sticky">
		<div class="m-showcase__head m-reveal">
			<span class="m-eyebrow"><?php esc_html_e( 'املاک منتخب', 'amlak-omid' ); ?></span>
			<h2 id="m-showcase-title"><?php esc_html_e( 'با اسکرول، مجموعه را کاوش کنید', 'amlak-omid' ); ?></h2>
		</div>

		<div class="m-track" role="region" aria-label="<?php esc_attr_e( 'املاک منتخب', 'amlak-omid' ); ?>" tabindex="0">
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
					<a class="m-estate" href="<?php the_permalink(); ?>">
						<div class="m-estate__media">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php else : ?>
								<span class="m-estate__mono" aria-hidden="true">◆</span>
							<?php endif; ?>
						</div>
						<?php if ( $badge ) : ?><span class="m-estate__badge"><?php echo esc_html( $badge ); ?></span><?php endif; ?>
						<div class="m-estate__cap">
							<?php if ( $loc ) : ?><span class="m-estate__loc"><?php echo esc_html( $loc ); ?></span><?php endif; ?>
							<div class="m-estate__name"><?php the_title(); ?></div>
							<div class="m-estate__meta">
								<?php if ( $area ) : ?><span>📐 <?php echo esc_html( amlak_omid_fa_num( $area ) ); ?> متر</span><?php endif; ?>
								<?php if ( $price ) : ?><span>💎 <?php echo esc_html( amlak_omid_fa_num( $price ) ); ?> تومان</span><?php endif; ?>
							</div>
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
					array( 'پنت‌هاوس رو به شهر', 'فرمانیه', '۳۲۰ متر · ۴ خواب', '۶۲ میلیارد', 'فروش' ),
					array( 'دوبلکس مدرن', 'نیاوران', '۲۹۰ متر · ۴ خواب', '۴۸ میلیارد', 'فروش' ),
					array( 'آپارتمان لوکس', 'زعفرانیه', '۲۱۰ متر · ۳ خواب', '۳۸ میلیارد', 'فروش' ),
					array( 'برج‌باغ نوساز', 'کامرانیه', '۲۶۰ متر · ۳ خواب', '۲۸۰ میلیون', 'اجاره' ),
					array( 'ویلای ساحلی', 'رویان', '۵۲۰ متر · ۵ خواب', '۷۰ میلیارد', 'فروش' ),
				);
				foreach ( $demo as $d ) :
					?>
					<a class="m-estate" href="#contact">
						<div class="m-estate__media"><span class="m-estate__mono" aria-hidden="true">◆</span></div>
						<span class="m-estate__badge"><?php echo esc_html( $d[4] ); ?></span>
						<div class="m-estate__cap">
							<span class="m-estate__loc"><?php echo esc_html( $d[1] ); ?></span>
							<div class="m-estate__name"><?php echo esc_html( $d[0] ); ?></div>
							<div class="m-estate__meta"><span><?php echo esc_html( $d[2] ); ?></span><span>💎 <?php echo esc_html( $d[3] ); ?> تومان</span></div>
						</div>
					</a>
					<?php
				endforeach;
				?>
			<?php endif; ?>
		</div>

		<div class="m-showcase__hint" aria-hidden="true"><?php esc_html_e( '↓ اسکرول کنید — مجموعه به‌صورت افقی حرکت می‌کند', 'amlak-omid' ); ?></div>
	</div>
</section>
