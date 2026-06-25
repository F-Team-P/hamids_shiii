<?php
/**
 * Motion home: services (animated cards).
 *
 * @package Amlak_Omid_Motion
 */
$icon = function ( $p ) {
	return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $p . '</svg>';
};
$services = array(
	array( '<path d="M3 11l9-7 9 7"/><path d="M5 10v10h14V10"/><path d="M9 20v-6h6v6"/>', 'خرید و فروش', 'یافتن بهترین گزینه با قیمت‌گذاری منصفانه و مذاکرهٔ حرفه‌ای.' ),
	array( '<rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18"/><path d="M8 14h4"/>', 'رهن و اجاره', 'گستره‌ای از واحدهای مسکونی و تجاری، متناسب با بودجهٔ شما.' ),
	array( '<path d="M3 3v18h18"/><path d="M7 14l4-4 3 3 5-6"/>', 'مشاوره سرمایه‌گذاری', 'تحلیل بازار و معرفی فرصت‌های مطمئن برای رشد سرمایه.' ),
	array( '<path d="M12 3l8 4v6c0 5-3.5 7.5-8 8-4.5-.5-8-3-8-8V7z"/><path d="M9 12l2 2 4-4"/>', 'کارشناسی قیمت', 'ارزیابی دقیق ارزش ملک بر پایهٔ دادهٔ واقعی بازار.' ),
	array( '<path d="M2 21h20"/><path d="M4 21V8l8-5 8 5v13"/><path d="M9 21v-6h6v6"/>', 'مشارکت در ساخت', 'همراهی مالکان و سازندگان از توافق تا تحویل پروژه.' ),
	array( '<path d="M14 3v4a1 1 0 0 0 1 1h4"/><path d="M5 3h9l5 5v13H5z"/><path d="M9 13h6"/><path d="M9 17h6"/>', 'امور حقوقی و قرارداد', 'تنظیم قراردادهای شفاف و پیگیری تا انتقال سند.' ),
);
?>
<section class="m-section" id="services" aria-labelledby="m-services-title">
	<div class="m-container">
		<div class="m-head m-reveal">
			<span class="m-eyebrow"><?php esc_html_e( 'خدمات ما', 'amlak-omid' ); ?></span>
			<h2 id="m-services-title"><?php esc_html_e( 'هر آنچه برای یک معاملهٔ مطمئن نیاز دارید', 'amlak-omid' ); ?></h2>
			<p><?php esc_html_e( 'از مشاوره تا امضای سند، در تمام مسیر کنار شماییم.', 'amlak-omid' ); ?></p>
		</div>
		<div class="m-serv__grid" data-stagger>
			<?php foreach ( $services as $s ) : ?>
				<article class="m-serv" data-tilt>
					<div class="m-serv__icon"><?php echo $icon( $s[0] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
					<h3><?php echo esc_html( $s[1] ); ?></h3>
					<p><?php echo esc_html( $s[2] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
