<?php
/**
 * Motion header — scroll progress, kinetic nav, overlay menu.
 *
 * @package Amlak_Omid_Motion
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

<a class="m-skip" href="#main"><?php esc_html_e( 'پرش به محتوای اصلی', 'amlak-omid' ); ?></a>

<svg width="0" height="0" aria-hidden="true" focusable="false" style="position:absolute">
	<defs>
		<linearGradient id="mgrad" x1="0" y1="0" x2="1" y2="1">
			<stop offset="0" stop-color="#7c5cff"/><stop offset=".55" stop-color="#21e6c1"/><stop offset="1" stop-color="#ff5c8a"/>
		</linearGradient>
		<linearGradient id="mgrad2" x1="0" y1="0" x2="1" y2="0">
			<stop offset="0" stop-color="#7c5cff"/><stop offset=".5" stop-color="#3aa0ff"/><stop offset="1" stop-color="#21e6c1"/>
		</linearGradient>
	</defs>
</svg>

<div class="m-progress" aria-hidden="true"></div>

<?php
$amlak_name = get_bloginfo( 'name' );
$amlak_name = $amlak_name ? $amlak_name : __( 'املاک امید', 'amlak-omid' );
$nav_links = array(
	'#showcase' => __( 'املاک', 'amlak-omid' ),
	'#heritage' => __( 'میراث', 'amlak-omid' ),
	'#services' => __( 'خدمات', 'amlak-omid' ),
	'#contact'  => __( 'تماس', 'amlak-omid' ),
);
?>

<header class="m-nav" id="site-nav">
	<div class="m-container">
		<div class="m-nav__inner">
			<a class="m-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span class="dot" aria-hidden="true"></span>
				<?php echo esc_html( $amlak_name ); ?>
				<small><?php printf( esc_html__( 'از %s', 'amlak-omid' ), esc_html( amlak_omid_opt( 'amlak_year_founded', '۱۳۵۴' ) ) ); ?></small>
			</a>

			<nav class="m-menu" aria-label="<?php esc_attr_e( 'منوی اصلی', 'amlak-omid' ); ?>">
				<?php
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'items_wrap' => '%3$s', 'depth' => 1 ) );
				} else {
					foreach ( $nav_links as $href => $label ) {
						printf( '<a href="%s">%s</a>', esc_attr( $href ), esc_html( $label ) );
					}
				}
				?>
			</nav>

			<div class="m-nav__actions">
				<a class="m-nav__cta m-btn m-btn--grad m-magnetic" href="#contact"><?php esc_html_e( 'مشاورهٔ رایگان', 'amlak-omid' ); ?></a>
				<button class="m-burger" type="button" aria-expanded="false" aria-controls="m-overlay" aria-label="<?php esc_attr_e( 'باز کردن منو', 'amlak-omid' ); ?>">
					<span></span><span></span><span></span>
				</button>
			</div>
		</div>
	</div>
</header>

<div class="m-overlay" id="m-overlay">
	<?php
	foreach ( $nav_links as $href => $label ) {
		printf( '<a href="%s">%s</a>', esc_attr( $href ), esc_html( $label ) );
	}
	?>
	<a href="#contact"><?php esc_html_e( 'مشاورهٔ رایگان', 'amlak-omid' ); ?></a>
</div>

<main id="main">
