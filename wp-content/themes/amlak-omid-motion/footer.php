<?php
/**
 * Motion footer.
 *
 * @package Amlak_Omid_Motion
 */
$amlak_name = get_bloginfo( 'name' );
$amlak_name = $amlak_name ? $amlak_name : __( 'املاک امید', 'amlak-omid' );
?>
</main><!-- #main -->

<footer class="m-footer">
	<div class="m-container">
		<div class="m-footer__top">
			<div class="m-footer__brand">
				<div class="m-brand"><span class="dot" aria-hidden="true"></span><?php echo esc_html( $amlak_name ); ?></div>
				<p><?php esc_html_e( 'نیم قرن تجربه، با تجربه‌ای امروزی. خانهٔ تازهٔ شما همین‌جاست.', 'amlak-omid' ); ?></p>
			</div>
			<div class="m-footer__cols">
				<div>
					<h4><?php esc_html_e( 'پیوندها', 'amlak-omid' ); ?></h4>
					<a href="#showcase"><?php esc_html_e( 'املاک', 'amlak-omid' ); ?></a>
					<a href="#heritage"><?php esc_html_e( 'میراث', 'amlak-omid' ); ?></a>
					<a href="#services"><?php esc_html_e( 'خدمات', 'amlak-omid' ); ?></a>
					<a href="#contact"><?php esc_html_e( 'تماس', 'amlak-omid' ); ?></a>
				</div>
				<div>
					<h4><?php esc_html_e( 'شبکه‌ها', 'amlak-omid' ); ?></h4>
					<a href="<?php echo esc_url( amlak_omid_opt( 'amlak_instagram', '#' ) ); ?>"><?php esc_html_e( 'اینستاگرام', 'amlak-omid' ); ?></a>
					<a href="<?php echo esc_url( amlak_omid_opt( 'amlak_telegram', '#' ) ); ?>"><?php esc_html_e( 'تلگرام', 'amlak-omid' ); ?></a>
					<a href="<?php echo esc_url( amlak_omid_opt( 'amlak_whatsapp', '#' ) ); ?>"><?php esc_html_e( 'واتساپ', 'amlak-omid' ); ?></a>
				</div>
			</div>
		</div>
		<div class="m-footer__bottom">
			<span>
				<?php
				printf(
					/* translators: 1: current Jalali year, 2: founding year. */
					esc_html__( '© %1$s املاک امید — افتخار خدمت از سال %2$s', 'amlak-omid' ),
					esc_html( amlak_omid_fa_num( amlak_omid_jalali_year() ) ),
					esc_html( amlak_omid_opt( 'amlak_year_founded', '۱۳۵۴' ) )
				);
				?>
			</span>
			<span><?php esc_html_e( 'ساخته‌شده با حرکت و انرژی ✦', 'amlak-omid' ); ?></span>
		</div>
	</div>
</footer>

<button class="m-top" type="button" aria-label="<?php esc_attr_e( 'بازگشت به بالا', 'amlak-omid' ); ?>">↑</button>

<?php wp_footer(); ?>
</body>
</html>
