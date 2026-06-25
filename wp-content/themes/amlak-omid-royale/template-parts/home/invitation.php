<?php
/**
 * Royale home: concierge invitation + contact.
 *
 * @package Amlak_Omid_Royale
 */

$phone   = amlak_omid_opt( 'amlak_phone', '۰۲۱-۱۲۳۴۵۶۷۸' );
$address = amlak_omid_opt( 'amlak_address', 'تهران، خیابان ولیعصر، نبش کوچه امید، پلاک ۱۳۵۴' );
$hours   = amlak_omid_opt( 'amlak_hours', 'شنبه تا پنجشنبه، ۹ تا ۲۰' );
?>
<section class="r-section r-invite" id="invite" aria-labelledby="r-invite-title">
	<div class="r-hero__bubbles" aria-hidden="true"></div>
	<div class="r-container">
		<div class="r-invite__inner">
			<div class="r-reveal">
				<span class="r-eyebrow"><?php esc_html_e( 'دعوت به گفت‌وگو', 'amlak-omid' ); ?></span>
				<h2 id="r-invite-title"><?php esc_html_e( 'بیایید خانهٔ شایستهٔ شما را بیابیم', 'amlak-omid' ); ?></h2>
				<p class="r-invite__lead"><?php esc_html_e( 'یک گفت‌وگوی خصوصی و بدون تعهد با مشاوران ارشد ما؛ آغاز مسیری آرام به سوی انتخابی درخور.', 'amlak-omid' ); ?></p>

				<ul class="r-invite__info">
					<li><span class="k"><?php esc_html_e( 'نشانی', 'amlak-omid' ); ?></span><span class="v"><?php echo esc_html( $address ); ?></span></li>
					<li><span class="k"><?php esc_html_e( 'تماس', 'amlak-omid' ); ?></span><span class="v"><a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', amlak_omid_en_num( $phone ) ) ); ?>"><?php echo esc_html( $phone ); ?></a></span></li>
					<li><span class="k"><?php esc_html_e( 'ساعات', 'amlak-omid' ); ?></span><span class="v"><?php echo esc_html( $hours ); ?></span></li>
				</ul>
			</div>

			<div class="r-invite__card r-reveal">
				<h3><?php esc_html_e( 'درخواست گفت‌وگوی خصوصی', 'amlak-omid' ); ?></h3>
				<form class="r-form" data-demo action="#" method="post">
					<div class="row">
						<input type="text" name="name" placeholder="<?php esc_attr_e( 'نام و نام خانوادگی', 'amlak-omid' ); ?>" required>
						<input type="tel" name="phone" placeholder="<?php esc_attr_e( 'شمارهٔ تماس', 'amlak-omid' ); ?>" required>
					</div>
					<input type="text" name="interest" placeholder="<?php esc_attr_e( 'منطقه یا نوع ملک موردنظر', 'amlak-omid' ); ?>">
					<textarea name="message" placeholder="<?php esc_attr_e( 'توضیح کوتاه (اختیاری)', 'amlak-omid' ); ?>"></textarea>
					<button type="submit" class="r-btn r-btn--solid"><?php esc_html_e( 'ارسال درخواست', 'amlak-omid' ); ?></button>
					<p class="form-note" hidden>✦ <?php esc_html_e( 'درخواست شما ثبت شد؛ به‌زودی به‌صورت خصوصی با شما تماس می‌گیریم. (نمونهٔ نمایشی)', 'amlak-omid' ); ?></p>
				</form>
			</div>
		</div>
	</div>
</section>
