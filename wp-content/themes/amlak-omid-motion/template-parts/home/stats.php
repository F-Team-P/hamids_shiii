<?php
/**
 * Motion home: animated stats (count-up + progress rings).
 *
 * @package Amlak_Omid_Motion
 */
$years_exp = (int) amlak_omid_en_num( amlak_omid_opt( 'amlak_years_exp', '50' ) );

/** Render an SVG progress ring with a counting value. */
function amlak_motion_ring( $count, $suffix, $pct ) {
	?>
	<div class="m-ring">
		<svg viewBox="0 0 100 100" width="96" height="96" aria-hidden="true">
			<circle class="track" cx="50" cy="50" r="44"></circle>
			<circle class="bar" cx="50" cy="50" r="44" data-pct="<?php echo esc_attr( $pct ); ?>"></circle>
		</svg>
		<span class="m-ring__val"><span data-count="<?php echo esc_attr( $count ); ?>"><?php echo esc_html( amlak_omid_fa_num( $count ) ); ?></span><?php echo esc_html( $suffix ); ?></span>
	</div>
	<?php
}
?>
<section class="m-section" aria-label="<?php esc_attr_e( 'آمار و دستاوردها', 'amlak-omid' ); ?>">
	<div class="m-container">
		<div class="m-stats__grid" data-stagger>
			<div class="m-stat">
				<?php amlak_motion_ring( $years_exp, '+', 100 ); ?>
				<div class="m-stat__label"><?php esc_html_e( 'سال تجربه و اعتماد', 'amlak-omid' ); ?></div>
			</div>
			<div class="m-stat">
				<div class="m-stat__num m-grad-text"><span data-count="12000">۱۲٬۰۰۰</span>+</div>
				<div class="m-stat__label"><?php esc_html_e( 'معاملهٔ موفق', 'amlak-omid' ); ?></div>
			</div>
			<div class="m-stat">
				<?php amlak_motion_ring( 98, '٪', 98 ); ?>
				<div class="m-stat__label"><?php esc_html_e( 'رضایت مشتریان', 'amlak-omid' ); ?></div>
			</div>
			<div class="m-stat">
				<div class="m-stat__num m-grad-text"><span data-count="3">۳</span></div>
				<div class="m-stat__label"><?php esc_html_e( 'نسل در خدمت شما', 'amlak-omid' ); ?></div>
			</div>
		</div>
	</div>
</section>
