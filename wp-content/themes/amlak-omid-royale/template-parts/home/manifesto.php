<?php
/**
 * Royale home: editorial manifesto + numbers.
 *
 * @package Amlak_Omid_Royale
 */

$years_exp = (int) amlak_omid_en_num( amlak_omid_opt( 'amlak_years_exp', '50' ) );

$stats = array(
	array( $years_exp, '+', 'سال تجربه' ),
	array( 12000, '+', 'معاملهٔ نفیس' ),
	array( 8500, '+', 'مشتری ممتاز' ),
	array( 3, '', 'نسل اعتماد' ),
);
?>
<section class="r-section r-section--light r-manifesto" id="about" aria-labelledby="r-manifesto-title">
	<div class="r-container">
		<div class="r-manifesto__inner">
			<div class="r-manifesto__aside r-reveal">
				<div class="r-manifesto__big">
					<span class="pnum">نیم قرن</span>
					<small><?php esc_html_e( 'تخصص · اعتماد · ظرافت', 'amlak-omid' ); ?></small>
				</div>
			</div>
			<div class="r-reveal">
				<span class="r-eyebrow"><?php esc_html_e( 'دربارهٔ ما', 'amlak-omid' ); ?></span>
				<p class="r-manifesto__lead" id="r-manifesto-title">
					<?php
					echo wp_kses(
						__( 'از سال <strong>۱۳۵۴</strong>، «املاک امید» نامی‌ست که با ظرافت، امانت‌داری و نگاهی نفیس، خانهٔ شایستهٔ شما را می‌یابد. ما تنها ملک نمی‌فروشیم؛ سبک زندگی‌ای درخور را تقدیم می‌کنیم.', 'amlak-omid' ),
						array( 'strong' => array() )
					);
					?>
				</p>
			</div>
		</div>

		<div class="r-numbers">
			<?php foreach ( $stats as $s ) : ?>
				<div class="r-stat r-reveal">
					<div class="r-stat__n"><span data-count="<?php echo esc_attr( $s[0] ); ?>"><?php echo esc_html( str_replace( ',', '٬', amlak_omid_fa_num( number_format( $s[0] ) ) ) ); ?></span><?php echo esc_html( $s[1] ); ?></div>
					<div class="r-stat__l"><?php echo esc_html( $s[2] ); ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
