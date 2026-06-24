<?php
/**
 * Home section: Stats counters.
 *
 * @package Amlak_Omid
 */

$years_exp = (int) amlak_omid_opt( 'amlak_years_exp', '50' );

$stats = array(
	array( $years_exp, '+', 'سال تجربه و اعتماد' ),
	array( 12000, '+', 'معاملهٔ موفق' ),
	array( 8500, '+', 'مشتری راضی' ),
	array( 3, '', 'نسل در خدمت شما' ),
);
?>
<section class="section stats" aria-label="<?php esc_attr_e( 'آمار و دستاوردها', 'amlak-omid' ); ?>">
	<div class="tile-band" aria-hidden="true"></div>
	<div class="girih-bg" aria-hidden="true"></div>
	<div class="container">
		<div class="stats__grid">
			<?php foreach ( $stats as $stat ) : ?>
				<div class="stat reveal">
					<div class="stat__num">
						<span data-count="<?php echo esc_attr( $stat[0] ); ?>"><?php echo esc_html( str_replace( ',', '٬', amlak_omid_fa_num( number_format( $stat[0] ) ) ) ); ?></span><span class="suffix"><?php echo esc_html( $stat[1] ); ?></span>
					</div>
					<div class="stat__label"><?php echo esc_html( $stat[2] ); ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
