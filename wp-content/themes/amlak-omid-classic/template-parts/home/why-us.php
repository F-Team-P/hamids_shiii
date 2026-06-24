<?php
/**
 * Home section: Why choose us (چرا املاک امید؟).
 *
 * @package Amlak_Omid
 */

$year_founded = amlak_omid_opt( 'amlak_year_founded', '۱۳۵۴' );

$reasons = array(
	array( '🏛', 'نیم قرن سابقه و اعتبار', 'از سال ۱۳۵۴ تا امروز، نامی شناخته‌شده و مورد اعتماد در بازار املاک.' ),
	array( '🤝', 'امانت‌داری و شفافیت', 'صداقت در قیمت‌گذاری و شفافیت کامل در قراردادها، اصل همیشگی ماست.' ),
	array( '👥', 'مشاوران متخصص و محلی', 'تیمی از کارشناسان آشنا به محله که بهترین گزینه را به شما معرفی می‌کنند.' ),
	array( '🗂', 'بانک گستردهٔ املاک', 'دسترسی به طیف وسیعی از فایل‌های به‌روز برای خرید، فروش و اجاره.' ),
);
?>
<section class="section why" id="about" aria-labelledby="why-title">
	<div class="container">
		<div class="why__inner">
			<div class="why__text reveal">
				<div class="heading" style="text-align:start;margin-inline:0">
					<span class="eyebrow" style="margin-inline-start:0"><?php esc_html_e( 'چرا املاک امید؟', 'amlak-omid' ); ?></span>
					<h2 id="why-title"><?php esc_html_e( 'تجربه‌ای که با هیچ‌کس قابل مقایسه نیست', 'amlak-omid' ); ?></h2>
					<p style="margin:0"><?php esc_html_e( 'وقتی نیم قرن در کنار مردم بوده‌اید، اعتماد دیگر یک شعار نیست؛ یک سرمایه است. ما این سرمایه را با تخصص امروز ترکیب کرده‌ایم.', 'amlak-omid' ); ?></p>
				</div>

				<div class="why__list">
					<?php foreach ( $reasons as $r ) : ?>
						<div class="why-item">
							<span class="why-item__icon" aria-hidden="true" style="font-size:1.5rem"><?php echo esc_html( $r[0] ); ?></span>
							<div>
								<h3><?php echo esc_html( $r[1] ); ?></h3>
								<p><?php echo esc_html( $r[2] ); ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="why__art reveal" aria-hidden="true">
				<div class="est">
					<span><?php esc_html_e( 'افتخار خدمت از', 'amlak-omid' ); ?></span>
					<b><?php echo esc_html( $year_founded ); ?></b>
					<span><?php esc_html_e( 'تاکنون', 'amlak-omid' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>
