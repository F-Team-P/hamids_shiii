<?php
/**
 * Royale home: cinematic hero.
 *
 * @package Amlak_Omid_Royale
 */

$year_founded = amlak_omid_opt( 'amlak_year_founded', '۱۳۵۴' );
$amlak_name   = get_bloginfo( 'name' );
$amlak_name   = $amlak_name ? $amlak_name : __( 'املاک امید', 'amlak-omid' );
?>
<section class="r-hero" aria-labelledby="r-hero-title">
	<div class="r-hero__bubbles" aria-hidden="true"></div>
	<span class="r-hero__watermark" aria-hidden="true"><?php echo esc_html( $year_founded ); ?></span>

	<div class="r-hero__content">
		<span class="r-eyebrow"><?php esc_html_e( 'مجموعهٔ املاک نفیس', 'amlak-omid' ); ?></span>

		<h1 class="r-hero__title" id="r-hero-title">
			<span class="r-hero__wordmark r-foil"><?php echo esc_html( $amlak_name ); ?></span>
			<?php esc_html_e( 'خانه‌ای در شأن شما', 'amlak-omid' ); ?>
		</h1>

		<p class="r-hero__sub"><?php esc_html_e( 'نیم قرن انتخاب نفیس‌ترین املاک برای کسانی که به کمتر از بهترین قانع نیستند.', 'amlak-omid' ); ?></p>

		<div class="r-rule" aria-hidden="true"></div>
		<div class="r-hero__since"><?php printf( esc_html__( 'از سال %s', 'amlak-omid' ), esc_html( $year_founded ) ); ?></div>

		<div class="r-hero__cta">
			<a class="r-btn r-btn--solid" href="#collection"><?php esc_html_e( 'کاوش در مجموعه', 'amlak-omid' ); ?></a>
			<a class="r-link" href="#invite"><?php esc_html_e( 'گفت‌وگوی خصوصی', 'amlak-omid' ); ?></a>
		</div>
	</div>

	<div class="r-scrollcue" aria-hidden="true">
		<span><?php esc_html_e( 'اسکرول', 'amlak-omid' ); ?></span>
		<i></i>
	</div>
</section>
