<?php
/**
 * Motion home: heritage — count-up + self-drawing SVG timeline.
 *
 * @package Amlak_Omid_Motion
 */
$years_exp = (int) amlak_omid_en_num( amlak_omid_opt( 'amlak_years_exp', '50' ) );
$nodes = array(
	array( 880, '۱۳۵۴', 'آغاز' ),
	array( 690, '۱۳۶۵', 'گسترش' ),
	array( 500, '۱۳۸۰', 'نسل دوم' ),
	array( 310, '۱۳۹۵', 'آنلاین' ),
	array( 120, '۱۴۰۴', 'نیم قرن' ),
);
?>
<section class="m-section m-heritage" id="heritage" aria-labelledby="m-heritage-title">
	<div class="m-container">
		<span class="m-eyebrow m-reveal"><?php esc_html_e( 'میراث ما', 'amlak-omid' ); ?></span>
		<div class="m-odo m-grad-text m-reveal" id="m-heritage-title">
			<span data-count="<?php echo esc_attr( $years_exp ); ?>"><?php echo esc_html( amlak_omid_fa_num( $years_exp ) ); ?></span>+
		</div>
		<p class="m-heritage__sub m-reveal"><?php esc_html_e( 'سال در کنار شما — از ۱۳۵۴ تا امروز، نامی که نسل به نسل به آن اعتماد شده است.', 'amlak-omid' ); ?></p>

		<div class="m-timeline m-reveal" role="img" aria-label="<?php esc_attr_e( 'خط زمانی میراث: ۱۳۵۴ تا ۱۴۰۴', 'amlak-omid' ); ?>">
			<svg viewBox="0 0 960 160" preserveAspectRatio="xMidYMid meet">
				<path class="road" d="M120 90 H880"></path>
				<path class="draw" d="M880 90 H120"></path>
				<?php foreach ( $nodes as $n ) : ?>
					<circle class="node" cx="<?php echo esc_attr( $n[0] ); ?>" cy="90" r="7"></circle>
					<text class="yr" x="<?php echo esc_attr( $n[0] ); ?>" y="58" text-anchor="middle" font-size="26"><?php echo esc_html( $n[1] ); ?></text>
					<text class="lbl" x="<?php echo esc_attr( $n[0] ); ?>" y="128" text-anchor="middle"><?php echo esc_html( $n[2] ); ?></text>
				<?php endforeach; ?>
			</svg>
		</div>
	</div>
</section>
