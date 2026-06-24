<?php
/**
 * 404 template.
 *
 * @package Amlak_Omid
 */

get_header();
?>

<div class="section text-center">
	<div class="container" style="max-width:640px">
		<div style="font-family:var(--font-display);font-size:6rem;color:var(--terracotta);line-height:1">۴۰۴</div>
		<div class="heading">
			<h2><?php esc_html_e( 'صفحه‌ای که دنبالش بودید پیدا نشد', 'amlak-omid' ); ?></h2>
			<p><?php esc_html_e( 'شاید نشانی تغییر کرده باشد. بیایید به خانه برگردیم یا املاک موجود را ببینیم.', 'amlak-omid' ); ?></p>
			<span class="rule"></span>
		</div>
		<div style="display:flex;gap:.8rem;justify-content:center;flex-wrap:wrap">
			<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'بازگشت به خانه', 'amlak-omid' ); ?></a>
			<a class="btn btn--ghost" href="<?php echo esc_url( home_url( '/amlak' ) ); ?>"><?php esc_html_e( 'مشاهده املاک', 'amlak-omid' ); ?></a>
		</div>
	</div>
</div>

<?php
get_footer();
