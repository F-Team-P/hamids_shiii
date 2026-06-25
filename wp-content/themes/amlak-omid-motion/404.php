<?php
/**
 * Motion 404.
 *
 * @package Amlak_Omid_Motion
 */
get_header();
?>
<section class="m-section" style="text-align:center">
	<div class="m-container">
		<div class="m-404big m-grad-text">۴۰۴</div>
		<div class="m-pagehead" style="margin-bottom:1.6rem">
			<h1><?php esc_html_e( 'این صفحه پیدا نشد', 'amlak-omid' ); ?></h1>
			<p><?php esc_html_e( 'شاید نشانی تغییر کرده باشد. بیایید برگردیم.', 'amlak-omid' ); ?></p>
		</div>
		<div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap">
			<a class="m-btn m-btn--grad m-magnetic" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'بازگشت به خانه', 'amlak-omid' ); ?></a>
			<a class="m-btn m-btn--ghost" href="<?php echo esc_url( get_post_type_archive_link( 'property' ) ? get_post_type_archive_link( 'property' ) : home_url( '/amlak' ) ); ?>"><?php esc_html_e( 'مشاهدهٔ املاک', 'amlak-omid' ); ?></a>
		</div>
	</div>
</section>
<?php
get_footer();
