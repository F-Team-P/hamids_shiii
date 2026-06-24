<?php
/**
 * Home section: Testimonials (نظر مشتریان).
 *
 * @package Amlak_Omid
 */

$testimonials = array(
	array( 'پدرم خانهٔ اولش را سال‌ها پیش از همین بنگاه خرید و حالا من هم خانهٔ خودم را با اعتماد کامل از املاک امید خریدم. سه نسل، یک اعتماد.', 'مریم رضایی', 'خریدار آپارتمان', 'م' ),
	array( 'برخورد صادقانه و مشاورهٔ دقیقشان باعث شد بدون هیچ دغدغه‌ای ملکم را بفروشم. واقعاً حرفه‌ای و قابل اعتماد بودند.', 'علی محمدی', 'فروشندهٔ ملک', 'ع' ),
	array( 'برای اجارهٔ دفتر کارمان چند جا رفتیم، اما تنها جایی که با صبر و حوصله بهترین گزینه را پیدا کرد، املاک امید بود.', 'سحر کریمی', 'مستأجر تجاری', 'س' ),
);
?>
<section class="section section--cream2" aria-labelledby="tst-title">
	<div class="container">
		<div class="heading reveal">
			<span class="eyebrow"><?php esc_html_e( 'نظر مشتریان', 'amlak-omid' ); ?></span>
			<h2 id="tst-title"><?php esc_html_e( 'اعتماد آن‌ها، افتخار ماست', 'amlak-omid' ); ?></h2>
			<p><?php esc_html_e( 'صدای کسانی که سال‌هاست همراه ما بوده‌اند.', 'amlak-omid' ); ?></p>
			<span class="rule"></span>
		</div>

		<div class="tst__grid">
			<?php foreach ( $testimonials as $t ) : ?>
				<figure class="tst-card reveal">
					<span class="quote" aria-hidden="true">”</span>
					<div class="stars" aria-label="<?php esc_attr_e( '۵ از ۵', 'amlak-omid' ); ?>">★★★★★</div>
					<blockquote style="margin:0;padding:0;border:0">
						<p><?php echo esc_html( $t[0] ); ?></p>
					</blockquote>
					<figcaption class="tst-card__person">
						<span class="tst-card__avatar" aria-hidden="true"><?php echo esc_html( $t[3] ); ?></span>
						<span>
							<b><?php echo esc_html( $t[1] ); ?></b>
							<small><?php echo esc_html( $t[2] ); ?></small>
						</span>
					</figcaption>
				</figure>
			<?php endforeach; ?>
		</div>
	</div>
</section>
