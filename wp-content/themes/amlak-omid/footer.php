<?php
/**
 * Site footer.
 *
 * @package Amlak_Omid
 */
?>
</main><!-- #main -->

<footer class="site-footer">
	<div class="tile-band" aria-hidden="true"></div>
	<div class="site-footer__main">
		<div class="container">
			<div class="footer-grid">

				<div class="footer-col footer-brand">
					<span class="brand">
						<span class="brand__seal"><?php echo amlak_omid_svg( 'seal' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
						<span class="brand__name">
							<?php $amlak_name = get_bloginfo( 'name' ); ?>
							<b><?php echo esc_html( $amlak_name ? $amlak_name : __( 'املاک امید', 'amlak-omid' ) ); ?></b>
						</span>
					</span>
					<p><?php esc_html_e( 'نیم قرن اعتماد، تخصص و همراهی در بازار املاک. آرامش شما، خانهٔ ماست.', 'amlak-omid' ); ?></p>
					<span class="footer-seal">
						⚜ <?php printf( esc_html__( 'تأسیس %s', 'amlak-omid' ), esc_html( amlak_omid_opt( 'amlak_year_founded', '۱۳۵۴' ) ) ); ?>
					</span>
				</div>

				<div class="footer-col">
					<h4><?php esc_html_e( 'دسترسی سریع', 'amlak-omid' ); ?></h4>
					<?php
					if ( has_nav_menu( 'footer' ) ) {
						wp_nav_menu( array(
							'theme_location' => 'footer',
							'container'      => false,
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						) );
					} else {
						echo '<a href="' . esc_url( home_url( '/' ) ) . '">خانه</a>';
						echo '<a href="' . esc_url( home_url( '/amlak' ) ) . '">املاک</a>';
						echo '<a href="#services">خدمات ما</a>';
						echo '<a href="#heritage">میراث ما</a>';
						echo '<a href="#contact">تماس با ما</a>';
					}
					?>
				</div>

				<div class="footer-col">
					<h4><?php esc_html_e( 'خدمات', 'amlak-omid' ); ?></h4>
					<a href="#services"><?php esc_html_e( 'خرید و فروش', 'amlak-omid' ); ?></a>
					<a href="#services"><?php esc_html_e( 'رهن و اجاره', 'amlak-omid' ); ?></a>
					<a href="#services"><?php esc_html_e( 'مشاوره سرمایه‌گذاری', 'amlak-omid' ); ?></a>
					<a href="#services"><?php esc_html_e( 'کارشناسی قیمت', 'amlak-omid' ); ?></a>
					<a href="#services"><?php esc_html_e( 'امور حقوقی و قراردادها', 'amlak-omid' ); ?></a>
				</div>

				<div class="footer-col">
					<h4><?php esc_html_e( 'تماس با ما', 'amlak-omid' ); ?></h4>
					<ul class="footer-contact">
						<li><span class="ic" aria-hidden="true">📍</span><span><?php echo esc_html( amlak_omid_opt( 'amlak_address', 'تهران، خیابان ولیعصر، نبش کوچه امید، پلاک ۱۳۵۴' ) ); ?></span></li>
						<li><span class="ic" aria-hidden="true">📞</span><span><?php echo esc_html( amlak_omid_opt( 'amlak_phone', '۰۲۱-۱۲۳۴۵۶۷۸' ) ); ?></span></li>
						<li><span class="ic" aria-hidden="true">✉️</span><span><?php echo esc_html( amlak_omid_opt( 'amlak_email', 'info@amlak-omid.ir' ) ); ?></span></li>
						<li><span class="ic" aria-hidden="true">🕘</span><span><?php echo esc_html( amlak_omid_opt( 'amlak_hours', 'شنبه تا پنجشنبه، ۹ تا ۲۰' ) ); ?></span></li>
					</ul>
				</div>

			</div>
		</div>
	</div>

	<div class="site-footer__bottom">
		<div class="container">
			<span>
				<?php
				printf(
					/* translators: 1: current year, 2: founding year. */
					esc_html__( '© %1$s املاک امید — افتخار خدمت از سال %2$s', 'amlak-omid' ),
					esc_html( amlak_omid_fa_num( wp_date( 'Y' ) ) ),
					esc_html( amlak_omid_opt( 'amlak_year_founded', '۱۳۵۴' ) )
				);
				?>
			</span>
			<span><?php esc_html_e( 'طراحی‌شده با ❤ برای آرامش شما', 'amlak-omid' ); ?></span>
		</div>
	</div>
</footer>

<button class="to-top" type="button" aria-label="<?php esc_attr_e( 'بازگشت به بالا', 'amlak-omid' ); ?>">▲</button>

<?php wp_footer(); ?>
</body>
</html>
