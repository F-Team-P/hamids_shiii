<?php
/**
 * Royale home: bespoke services as an editorial index.
 *
 * @package Amlak_Omid_Royale
 */

$services = array(
	array( 'خرید و فروش نفیس', 'یافتن و واگذاری املاک استثنایی با مذاکره‌ای حرفه‌ای و محرمانه.' ),
	array( 'رهن و اجارهٔ ممتاز', 'واحدهای مسکونی و تجاری شایسته، متناسب با سبک زندگی شما.' ),
	array( 'مشاورهٔ سرمایه‌گذاری', 'تحلیل بازار و معرفی فرصت‌های مطمئن برای رشد سرمایه.' ),
	array( 'کارشناسی و ارزیابی', 'برآورد دقیق ارزش ملک بر پایهٔ دادهٔ واقعی بازار.' ),
	array( 'مشارکت در ساخت', 'همراهی مالکان و سازندگان از توافق تا تحویل پروژه.' ),
	array( 'امور حقوقی و قرارداد', 'تنظیم قراردادهای شفاف و پیگیری تا انتقال سند.' ),
);
?>
<section class="r-section r-services" id="services" aria-labelledby="r-services-title">
	<div class="r-container">
		<div class="r-services__head r-reveal">
			<span class="r-eyebrow"><?php esc_html_e( 'خدمات اختصاصی', 'amlak-omid' ); ?></span>
			<h2 id="r-services-title"><?php esc_html_e( 'تجربه‌ای کامل، از مشاوره تا کلید', 'amlak-omid' ); ?></h2>
		</div>

		<div class="r-index">
			<?php
			$i = 0;
			foreach ( $services as $s ) :
				$i++;
				?>
				<div class="r-index__row r-reveal">
					<span class="r-index__no"><?php echo esc_html( amlak_omid_fa_num( sprintf( '%02d', $i ) ) ); ?></span>
					<div class="r-index__main">
						<h3 class="r-index__title"><?php echo esc_html( $s[0] ); ?></h3>
						<p class="r-index__desc"><?php echo esc_html( $s[1] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
