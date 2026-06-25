<?php
/**
 * Royale 404.
 *
 * @package Amlak_Omid_Royale
 */

get_header();
?>
<section class="r-section r-404">
	<div class="r-container">
		<div class="r-404__big r-foil">۴۰۴</div>
		<div class="r-pagehead" style="margin-bottom:0">
			<h1><?php esc_html_e( 'این نشانی یافت نشد', 'amlak-omid' ); ?></h1>
			<p><?php esc_html_e( 'شاید صفحه جابه‌جا شده باشد. بیایید به مجموعه بازگردیم.', 'amlak-omid' ); ?></p>
		</div>
		<div class="r-404__cta">
			<a class="r-btn r-btn--solid" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'بازگشت به خانه', 'amlak-omid' ); ?></a>
			<a class="r-btn" href="<?php echo esc_url( home_url( '/amlak' ) ); ?>"><?php esc_html_e( 'مشاهدهٔ مجموعه', 'amlak-omid' ); ?></a>
		</div>
	</div>
</section>
<?php
get_footer();
