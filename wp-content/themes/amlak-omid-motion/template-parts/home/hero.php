<?php
/**
 * Motion home: kinetic hero (aurora, split-text, rotating word, marquee).
 *
 * @package Amlak_Omid_Motion
 */
$year_founded = amlak_omid_opt( 'amlak_year_founded', '۱۳۵۴' );
$marquee = array( 'خرید', 'فروش', 'رهن و اجاره', 'سرمایه‌گذاری', 'مشاوره', 'کارشناسی', 'مشارکت در ساخت' );
?>
<section class="m-hero" aria-labelledby="m-hero-title">
	<div class="m-aurora" aria-hidden="true"><i></i><i></i><i></i></div>
	<div class="m-hero__grain" aria-hidden="true"></div>
	<div class="m-hero__spot" aria-hidden="true"></div>

	<div class="m-hero__content">
		<span class="m-eyebrow"><?php printf( esc_html__( 'املاک امید · از سال %s', 'amlak-omid' ), esc_html( $year_founded ) ); ?></span>

		<h1 id="m-hero-title">
			<span class="m-line" data-split><?php esc_html_e( 'خانهٔ تازهٔ شما', 'amlak-omid' ); ?></span>
			<span class="m-line">
				<span class="m-grad-text"><?php esc_html_e( 'یک کلیک تا', 'amlak-omid' ); ?></span>
				<span class="m-hero__rotator m-grad-text" aria-hidden="true">
					<span><?php esc_html_e( 'خرید', 'amlak-omid' ); ?></span>
					<span><?php esc_html_e( 'فروش', 'amlak-omid' ); ?></span>
					<span><?php esc_html_e( 'اجاره', 'amlak-omid' ); ?></span>
					<span><?php esc_html_e( 'سرمایه‌گذاری', 'amlak-omid' ); ?></span>
				</span>
				<span class="sr-only"><?php esc_html_e( 'خرید، فروش، اجاره و سرمایه‌گذاری', 'amlak-omid' ); ?></span>
			</span>
		</h1>

		<p class="m-hero__sub"><?php esc_html_e( 'نیم قرن تجربه، حالا با تجربه‌ای امروزی و پویا. بهترین فرصت‌های بازار را زنده و متحرک کشف کنید.', 'amlak-omid' ); ?></p>

		<div class="m-hero__cta">
			<a class="m-btn m-btn--grad m-magnetic" href="#showcase"><?php esc_html_e( 'کاوش املاک', 'amlak-omid' ); ?></a>
			<a class="m-btn m-btn--ghost" href="#contact"><?php esc_html_e( 'مشاورهٔ رایگان', 'amlak-omid' ); ?></a>
		</div>
	</div>

	<div class="m-hero__scroll" aria-hidden="true"><span><?php esc_html_e( 'اسکرول', 'amlak-omid' ); ?></span><i></i></div>

	<div class="m-marquee" aria-hidden="true">
		<div class="m-marquee__track">
			<?php
			// Duplicated set so the -50% translate loops seamlessly.
			for ( $r = 0; $r < 2; $r++ ) :
				foreach ( $marquee as $word ) :
					?><span><?php echo esc_html( $word ); ?></span><?php
				endforeach;
			endfor;
			?>
		</div>
	</div>
</section>
