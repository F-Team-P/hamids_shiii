<?php
/**
 * Site header.
 *
 * @package Amlak_Omid
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="sr-only" href="#main"><?php esc_html_e( 'پرش به محتوای اصلی', 'amlak-omid' ); ?></a>

<header class="site-header">
	<div class="site-header__topbar">
		<div class="container">
			<div class="topbar__contact">
				<span aria-hidden="true">📞</span>
				<a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', amlak_omid_opt( 'amlak_phone', '02112345678' ) ) ); ?>">
					<?php echo esc_html( amlak_omid_opt( 'amlak_phone', '۰۲۱-۱۲۳۴۵۶۷۸' ) ); ?>
				</a>
				<span>🕘 <?php echo esc_html( amlak_omid_opt( 'amlak_hours', 'شنبه تا پنجشنبه، ۹ تا ۲۰' ) ); ?></span>
			</div>
			<div class="topbar__social">
				<a href="<?php echo esc_url( amlak_omid_opt( 'amlak_instagram', '#' ) ); ?>" aria-label="اینستاگرام">اینستاگرام</a>
				<a href="<?php echo esc_url( amlak_omid_opt( 'amlak_telegram', '#' ) ); ?>" aria-label="تلگرام">تلگرام</a>
				<a href="<?php echo esc_url( amlak_omid_opt( 'amlak_whatsapp', '#' ) ); ?>" aria-label="واتساپ">واتساپ</a>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="site-header__bar">
			<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'املاک امید — صفحه نخست', 'amlak-omid' ); ?>">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<span class="brand__seal"><?php echo amlak_omid_svg( 'seal' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				<?php endif; ?>
				<span class="brand__name">
					<?php $amlak_name = get_bloginfo( 'name' ); ?>
					<b><?php echo esc_html( $amlak_name ? $amlak_name : __( 'املاک امید', 'amlak-omid' ) ); ?></b>
					<small><?php printf( esc_html__( 'تأسیس %s', 'amlak-omid' ), esc_html( amlak_omid_opt( 'amlak_year_founded', '۱۳۵۴' ) ) ); ?></small>
				</span>
			</a>

			<nav class="main-nav" id="primary-menu" aria-label="<?php esc_attr_e( 'منوی اصلی', 'amlak-omid' ); ?>">
				<?php
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'menu',
						'depth'          => 2,
					) );
				} else {
					// Fallback menu for fresh installs / demo.
					echo '<ul class="menu">';
					echo '<li class="current-menu-item"><a href="' . esc_url( home_url( '/' ) ) . '">خانه</a></li>';
					echo '<li><a href="' . esc_url( home_url( '/amlak' ) ) . '">املاک</a></li>';
					echo '<li><a href="#services">خدمات</a></li>';
					echo '<li><a href="#heritage">درباره ما</a></li>';
					echo '<li><a href="#contact">تماس با ما</a></li>';
					echo '</ul>';
				}
				?>
			</nav>

			<div class="header__actions">
				<a class="btn btn--primary" href="#contact"><?php esc_html_e( 'مشاوره رایگان', 'amlak-omid' ); ?></a>
				<button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-menu" aria-label="<?php esc_attr_e( 'باز/بسته کردن منو', 'amlak-omid' ); ?>">
					<span></span><span></span><span></span>
				</button>
			</div>
		</div>
	</div>
</header>

<main id="main">
