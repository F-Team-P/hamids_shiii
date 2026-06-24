<?php
/**
 * Home section: CTA + contact (تماس با ما).
 *
 * @package Amlak_Omid
 */

$phone   = amlak_omid_opt( 'amlak_phone', '۰۲۱-۱۲۳۴۵۶۷۸' );
$mobile  = amlak_omid_opt( 'amlak_mobile', '۰۹۱۲-۰۰۰۰۰۰۰' );
$address = amlak_omid_opt( 'amlak_address', 'تهران، خیابان ولیعصر، نبش کوچه امید، پلاک ۱۳۵۴' );
$hours   = amlak_omid_opt( 'amlak_hours', 'شنبه تا پنجشنبه، ۹ تا ۲۰' );
?>
<section class="section cta" id="contact" aria-labelledby="cta-title">
	<div class="girih-bg" aria-hidden="true"></div>
	<div class="container">
		<div class="cta__inner">
			<div class="cta__text reveal">
				<h2 id="cta-title"><?php esc_html_e( 'بیایید با هم خانهٔ آینده‌تان را پیدا کنیم', 'amlak-omid' ); ?></h2>
				<p><?php esc_html_e( 'یک تماس یا یک پیام کافی است. مشاوران باتجربهٔ ما با کمال میل و به‌صورت رایگان راهنمای شما خواهند بود.', 'amlak-omid' ); ?></p>

				<ul class="cta__contacts">
					<li>
						<span class="ic" aria-hidden="true">📍</span>
						<span><b><?php esc_html_e( 'نشانی دفتر', 'amlak-omid' ); ?></b><small><?php echo esc_html( $address ); ?></small></span>
					</li>
					<li>
						<span class="ic" aria-hidden="true">📞</span>
						<span><b><?php echo esc_html( $phone ); ?></b><small><?php echo esc_html( $mobile ); ?></small></span>
					</li>
					<li>
						<span class="ic" aria-hidden="true">🕘</span>
						<span><b><?php esc_html_e( 'ساعات کاری', 'amlak-omid' ); ?></b><small><?php echo esc_html( $hours ); ?></small></span>
					</li>
				</ul>
			</div>

			<div class="contact-card reveal">
				<h3><?php esc_html_e( 'درخواست مشاورهٔ رایگان', 'amlak-omid' ); ?></h3>
				<form class="contact-form" data-demo action="#" method="post">
					<div class="row">
						<input type="text" name="name" placeholder="<?php esc_attr_e( 'نام و نام خانوادگی', 'amlak-omid' ); ?>" required>
						<input type="tel" name="phone" placeholder="<?php esc_attr_e( 'شمارهٔ تماس', 'amlak-omid' ); ?>" required>
					</div>
					<input type="text" name="subject" placeholder="<?php esc_attr_e( 'موضوع (خرید، فروش، اجاره…)', 'amlak-omid' ); ?>">
					<textarea name="message" placeholder="<?php esc_attr_e( 'توضیح کوتاه دربارهٔ درخواست شما…', 'amlak-omid' ); ?>"></textarea>
					<button type="submit" class="btn btn--gold"><?php esc_html_e( 'ارسال درخواست', 'amlak-omid' ); ?></button>
					<p class="form-note" hidden style="margin:0;color:var(--turquoise-dark);font-weight:700">
						✓ <?php esc_html_e( 'درخواست شما ثبت شد. به‌زودی با شما تماس می‌گیریم. (نمونهٔ نمایشی)', 'amlak-omid' ); ?>
					</p>
				</form>
			</div>
		</div>
	</div>
</section>
