<?php
/**
 * Home section: Hero.
 *
 * @package Amlak_Omid
 */

$year_founded = amlak_omid_opt( 'amlak_year_founded', '۱۳۵۴' );
$years_exp    = amlak_omid_opt( 'amlak_years_exp', '50' );
$hero_title   = amlak_omid_opt( 'amlak_hero_title', 'خانه‌ای که نسل‌هاست به آن اعتماد دارید' );
$hero_lead    = amlak_omid_opt( 'amlak_hero_lead', 'از سال ۱۳۵۴ تا امروز؛ نیم قرن تجربه در خرید، فروش، رهن و اجاره املاک — همراه شما، نسل به نسل.' );
?>
<section class="hero" aria-labelledby="hero-title">
	<div class="girih-bg" aria-hidden="true"></div>
	<div class="container">
		<div class="hero__inner">
			<div class="hero__text reveal">
				<span class="hero__seal-badge">
					<span class="dot" aria-hidden="true"></span>
					<?php printf( esc_html__( 'تأسیس %1$s · بیش از %2$s سال اعتماد', 'amlak-omid' ), esc_html( $year_founded ), esc_html( amlak_omid_fa_num( $years_exp ) ) ); ?>
				</span>

				<h1 id="hero-title"><?php echo wp_kses_post( $hero_title ); ?></h1>
				<p class="hero__lead"><?php echo esc_html( $hero_lead ); ?></p>

				<div class="hero__cta">
					<a class="btn btn--primary" href="#properties">
						🏠 <?php esc_html_e( 'مشاهده املاک', 'amlak-omid' ); ?>
					</a>
					<a class="btn btn--ghost" href="#contact">
						<?php esc_html_e( 'تماس با مشاوران', 'amlak-omid' ); ?>
					</a>
				</div>
			</div>

			<div class="hero__visual reveal">
				<div class="hero__frame">
					<div class="hero__frame-content">
						<span class="big-seal"><?php echo amlak_omid_svg( 'seal' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
						<b><?php esc_html_e( 'املاک امید', 'amlak-omid' ); ?></b>
						<span><?php printf( esc_html__( 'از سال %s در کنار شما', 'amlak-omid' ), esc_html( $year_founded ) ); ?></span>
					</div>
				</div>
				<div class="hero__floating">
					<span class="num"><?php echo esc_html( amlak_omid_fa_num( $years_exp ) ); ?>+</span>
					<span class="lbl"><?php esc_html_e( 'سال تجربه', 'amlak-omid' ); ?><br><?php esc_html_e( 'در بازار املاک', 'amlak-omid' ); ?></span>
				</div>
			</div>
		</div>

		<!-- Property search -->
		<form class="search-bar reveal" id="properties" data-demo action="<?php echo esc_url( home_url( '/amlak' ) ); ?>" method="get" aria-label="<?php esc_attr_e( 'جستجوی ملک', 'amlak-omid' ); ?>">
			<div class="search-bar__grid">
				<div class="field">
					<label for="deal"><?php esc_html_e( 'نوع معامله', 'amlak-omid' ); ?></label>
					<select id="deal" name="deal">
						<option value=""><?php esc_html_e( 'همه', 'amlak-omid' ); ?></option>
						<option value="buy"><?php esc_html_e( 'خرید', 'amlak-omid' ); ?></option>
						<option value="mortgage"><?php esc_html_e( 'رهن', 'amlak-omid' ); ?></option>
						<option value="rent"><?php esc_html_e( 'اجاره', 'amlak-omid' ); ?></option>
					</select>
				</div>
				<div class="field">
					<label for="ptype"><?php esc_html_e( 'نوع ملک', 'amlak-omid' ); ?></label>
					<select id="ptype" name="ptype">
						<option value=""><?php esc_html_e( 'همه', 'amlak-omid' ); ?></option>
						<option value="apartment"><?php esc_html_e( 'آپارتمان', 'amlak-omid' ); ?></option>
						<option value="villa"><?php esc_html_e( 'ویلایی', 'amlak-omid' ); ?></option>
						<option value="commercial"><?php esc_html_e( 'تجاری/اداری', 'amlak-omid' ); ?></option>
						<option value="land"><?php esc_html_e( 'زمین', 'amlak-omid' ); ?></option>
					</select>
				</div>
				<div class="field">
					<label for="area-loc"><?php esc_html_e( 'محله / منطقه', 'amlak-omid' ); ?></label>
					<input type="text" id="area-loc" name="loc" placeholder="<?php esc_attr_e( 'مثلاً: سعادت‌آباد', 'amlak-omid' ); ?>">
				</div>
				<div class="field">
					<label for="budget"><?php esc_html_e( 'بودجه (تومان)', 'amlak-omid' ); ?></label>
					<select id="budget" name="budget">
						<option value=""><?php esc_html_e( 'بدون محدودیت', 'amlak-omid' ); ?></option>
						<option value="0-2"><?php esc_html_e( 'تا ۲ میلیارد', 'amlak-omid' ); ?></option>
						<option value="2-5"><?php esc_html_e( '۲ تا ۵ میلیارد', 'amlak-omid' ); ?></option>
						<option value="5-10"><?php esc_html_e( '۵ تا ۱۰ میلیارد', 'amlak-omid' ); ?></option>
						<option value="10+"><?php esc_html_e( 'بیش از ۱۰ میلیارد', 'amlak-omid' ); ?></option>
					</select>
				</div>
				<button class="btn btn--gold" type="submit">🔍 <?php esc_html_e( 'جستجو', 'amlak-omid' ); ?></button>
			</div>
		</form>
	</div>
</section>
