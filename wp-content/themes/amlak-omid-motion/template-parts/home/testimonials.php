<?php
/**
 * Motion home: auto-rotating testimonials.
 *
 * @package Amlak_Omid_Motion
 */
$items = array(
	array( 'سه نسل از خانوادهٔ ما خانه‌هایشان را به املاک امید سپرده‌اند؛ اعتمادی که موروثی شده است.', 'مریم رضایی', 'خریدار آپارتمان' ),
	array( 'تجربهٔ امروزی و سریع، اما با همان امانت‌داری قدیمی. دقیقاً همان چیزی که می‌خواستم.', 'علی محمدی', 'فروشندهٔ ملک' ),
	array( 'برای اجارهٔ دفتر، تنها جایی بود که با صبر بهترین گزینه را پیدا کرد. حرفه‌ای و مدرن.', 'سحر کریمی', 'مستأجر تجاری' ),
);
?>
<section class="m-section" aria-labelledby="m-tst-title">
	<div class="m-container">
		<div class="m-head m-reveal">
			<span class="m-eyebrow"><?php esc_html_e( 'نظر مشتریان', 'amlak-omid' ); ?></span>
			<h2 id="m-tst-title"><?php esc_html_e( 'اعتماد آن‌ها، افتخار ماست', 'amlak-omid' ); ?></h2>
		</div>

		<div class="m-tst m-reveal">
			<?php foreach ( $items as $i => $t ) : ?>
				<figure class="m-tst__item<?php echo 0 === $i ? ' active' : ''; ?>" style="margin:0">
					<blockquote class="m-tst__quote" style="margin:0;padding:0;border:0">«<?php echo esc_html( $t[0] ); ?>»</blockquote>
					<figcaption class="m-tst__by"><b><?php echo esc_html( $t[1] ); ?></b><?php echo esc_html( $t[2] ); ?></figcaption>
				</figure>
			<?php endforeach; ?>

			<div class="m-tst__dots" role="group" aria-label="<?php esc_attr_e( 'انتخاب نظر', 'amlak-omid' ); ?>">
				<?php foreach ( $items as $i => $t ) : ?>
					<button type="button"<?php echo 0 === $i ? ' aria-current="true"' : ''; ?> aria-label="<?php printf( esc_attr__( 'نظر %s', 'amlak-omid' ), esc_attr( amlak_omid_fa_num( $i + 1 ) ) ); ?>"></button>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
