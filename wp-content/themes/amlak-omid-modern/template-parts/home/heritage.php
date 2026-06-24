<?php
/**
 * Home section: Heritage timeline (میراث ما).
 *
 * @package Amlak_Omid
 */

$milestones = array(
	array( '۱۳۵۴', 'آغاز راه', 'بنگاه معاملات املاک امید با اعتماد و امانت‌داری در محله تأسیس شد.' ),
	array( '۱۳۶۵', 'گسترش فعالیت', 'با افزایش مشتریان وفادار، دفتر به مکانی بزرگ‌تر منتقل و تیم مشاوران تقویت شد.' ),
	array( '۱۳۸۰', 'نسل دوم', 'مدیریت به نسل دوم خانواده سپرده شد؛ تخصص پدر، با نگاه تازهٔ فرزندان.' ),
	array( '۱۳۹۵', 'املاک امید آنلاین', 'راه‌اندازی سامانهٔ آنلاین و بانک اطلاعاتی گستردهٔ املاک برای خدمت سریع‌تر.' ),
	array( '۱۴۰۴', 'نیم قرن اعتماد', 'امروز با بیش از ۵۰ سال تجربه و سه نسل، همچنان در کنار شما هستیم.' ),
);
?>
<section class="section" id="heritage" aria-labelledby="heritage-title">
	<div class="container">
		<div class="heading reveal">
			<span class="eyebrow"><?php esc_html_e( 'میراث ما', 'amlak-omid' ); ?></span>
			<h2 id="heritage-title"><?php esc_html_e( 'نیم قرن، یک نام؛ یک تعهد', 'amlak-omid' ); ?></h2>
			<p><?php esc_html_e( 'داستان املاک امید، داستان اعتمادی است که نسل به نسل ساخته شده است. از سال ۱۳۵۴ تا امروز، نام ما ضامن آرامش شما در مهم‌ترین تصمیم‌های زندگی بوده است.', 'amlak-omid' ); ?></p>
			<span class="rule"></span>
		</div>

		<div class="timeline">
			<?php foreach ( $milestones as $m ) : ?>
				<div class="tl-item reveal">
					<span class="tl-item__dot" aria-hidden="true"></span>
					<div class="tl-card">
						<span class="year"><?php echo esc_html( $m[0] ); ?></span>
						<h3><?php echo esc_html( $m[1] ); ?></h3>
						<p><?php echo esc_html( $m[2] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
