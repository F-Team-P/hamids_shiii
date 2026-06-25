<?php
/**
 * Royale home: expansive heritage statement + horizontal rail.
 *
 * @package Amlak_Omid_Royale
 */

$milestones = array(
	array( '۱۳۵۴', 'آغاز' ),
	array( '۱۳۶۵', 'گسترش' ),
	array( '۱۳۸۰', 'نسل دوم' ),
	array( '۱۳۹۵', 'حضور آنلاین' ),
	array( '۱۴۰۴', 'نیم قرن' ),
);
?>
<section class="r-section r-section--light r-heritage" id="heritage" aria-labelledby="r-heritage-title">
	<div class="r-container">
		<span class="r-eyebrow r-heritage__eyebrow r-reveal"><?php esc_html_e( 'میراث ما', 'amlak-omid' ); ?></span>
		<div class="r-heritage__year r-foil r-reveal" id="r-heritage-title">۱۳۵۴</div>
		<p class="r-heritage__statement r-reveal"><?php esc_html_e( 'نیم قرن، یک نام؛ اعتمادی که نسل به نسل ساخته شد.', 'amlak-omid' ); ?></p>

		<div class="r-rail r-reveal">
			<?php foreach ( $milestones as $m ) : ?>
				<div class="r-rail__item">
					<div class="r-rail__y"><?php echo esc_html( $m[0] ); ?></div>
					<div class="r-rail__t"><?php echo esc_html( $m[1] ); ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
