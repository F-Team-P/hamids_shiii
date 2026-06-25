<?php
/**
 * Motion home: CTA / contact.
 *
 * @package Amlak_Omid_Motion
 */
$phone = amlak_omid_opt( 'amlak_phone', '۰۲۱-۱۲۳۴۵۶۷۸' );
?>
<section class="m-section m-cta" id="contact" aria-labelledby="m-cta-title">
	<div class="m-container">
		<div class="m-cta__inner m-reveal">
			<div class="m-aurora" aria-hidden="true"><i></i><i></i><i></i></div>
			<h2 id="m-cta-title"><?php esc_html_e( 'آمادهٔ یافتن خانهٔ تازه‌اید؟', 'amlak-omid' ); ?></h2>
			<p><?php esc_html_e( 'شماره‌تان را بگذارید؛ مشاوران ما به‌رایگان و در سریع‌ترین زمان با شما تماس می‌گیرند.', 'amlak-omid' ); ?></p>

			<form class="m-cta__form" data-demo action="#" method="post">
				<label class="sr-only" for="m-name"><?php esc_html_e( 'نام', 'amlak-omid' ); ?></label>
				<input id="m-name" type="text" name="name" placeholder="<?php esc_attr_e( 'نام شما', 'amlak-omid' ); ?>" required>
				<label class="sr-only" for="m-phone"><?php esc_html_e( 'تلفن', 'amlak-omid' ); ?></label>
				<input id="m-phone" type="tel" name="phone" placeholder="<?php esc_attr_e( 'شمارهٔ تماس', 'amlak-omid' ); ?>" required>
				<button type="submit" class="m-btn m-btn--grad m-magnetic"><?php esc_html_e( 'درخواست تماس', 'amlak-omid' ); ?></button>
			</form>
			<p class="m-cta__note" hidden>✓ <?php esc_html_e( 'ثبت شد! به‌زودی با شما تماس می‌گیریم. (نمونهٔ نمایشی)', 'amlak-omid' ); ?></p>
			<p style="position:relative;z-index:2;margin:1.4rem 0 0;color:var(--muted)">
				<?php esc_html_e( 'یا تماس بگیرید:', 'amlak-omid' ); ?>
				<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', amlak_omid_en_num( $phone ) ) ); ?>" style="font-weight:700"><?php echo esc_html( $phone ); ?></a>
			</p>
		</div>
	</div>
</section>
