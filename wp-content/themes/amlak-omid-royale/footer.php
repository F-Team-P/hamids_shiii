<?php
/**
 * Royale footer — minimal, centered.
 *
 * @package Amlak_Omid_Royale
 */
$amlak_name = get_bloginfo( 'name' );
$amlak_name = $amlak_name ? $amlak_name : __( 'املاک امید', 'amlak-omid' );
?>
</main><!-- #main -->

<footer class="r-footer">
	<div class="r-container">
		<div class="r-footer__mark"><?php echo esc_html( $amlak_name ); ?></div>
		<p class="r-footer__tag"><?php esc_html_e( 'مجموعهٔ املاک نفیس — نیم قرن اعتماد، از سال ۱۳۵۴.', 'amlak-omid' ); ?></p>

		<nav class="r-foot-links" aria-label="<?php esc_attr_e( 'منوی فوتر', 'amlak-omid' ); ?>">
			<a href="#collection"><?php esc_html_e( 'مجموعه', 'amlak-omid' ); ?></a>
			<a href="#heritage"><?php esc_html_e( 'میراث', 'amlak-omid' ); ?></a>
			<a href="#services"><?php esc_html_e( 'خدمات', 'amlak-omid' ); ?></a>
			<a href="#invite"><?php esc_html_e( 'تماس', 'amlak-omid' ); ?></a>
		</nav>

		<div class="r-foot-social">
			<a href="<?php echo esc_url( amlak_omid_opt( 'amlak_instagram', '#' ) ); ?>"><?php esc_html_e( 'اینستاگرام', 'amlak-omid' ); ?></a>
			<a href="<?php echo esc_url( amlak_omid_opt( 'amlak_telegram', '#' ) ); ?>"><?php esc_html_e( 'تلگرام', 'amlak-omid' ); ?></a>
			<a href="<?php echo esc_url( amlak_omid_opt( 'amlak_whatsapp', '#' ) ); ?>"><?php esc_html_e( 'واتساپ', 'amlak-omid' ); ?></a>
		</div>

		<div class="r-foot-bottom">
			<?php
			printf(
				/* translators: 1: current Jalali year, 2: founding year. */
				esc_html__( '© %1$s املاک امید — افتخار خدمت از سال %2$s', 'amlak-omid' ),
				esc_html( amlak_omid_fa_num( amlak_omid_jalali_year() ) ),
				esc_html( amlak_omid_opt( 'amlak_year_founded', '۱۳۵۴' ) )
			);
			?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
