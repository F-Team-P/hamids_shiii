<?php
/**
 * Royale header — transparent, scroll-condensing navigation.
 *
 * @package Amlak_Omid_Royale
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

<a class="r-skip" href="#main"><?php esc_html_e( 'پرش به محتوای اصلی', 'amlak-omid' ); ?></a>

<?php
$amlak_name = get_bloginfo( 'name' );
$amlak_name = $amlak_name ? $amlak_name : __( 'املاک امید', 'amlak-omid' );
$nav_links = array(
	'#collection' => __( 'مجموعه', 'amlak-omid' ),
	'#heritage'   => __( 'میراث', 'amlak-omid' ),
	'#services'   => __( 'خدمات', 'amlak-omid' ),
	'#invite'     => __( 'تماس', 'amlak-omid' ),
);
?>

<header class="r-nav" id="site-nav">
	<div class="r-container">
		<div class="r-nav__inner">
			<a class="r-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span class="r-brand__name"><?php echo esc_html( $amlak_name ); ?></span>
				<span class="r-brand__est"><?php printf( esc_html__( 'EST. %s', 'amlak-omid' ), esc_html( amlak_omid_opt( 'amlak_year_founded', '۱۳۵۴' ) ) ); ?></span>
			</a>

			<nav class="r-menu" aria-label="<?php esc_attr_e( 'منوی اصلی', 'amlak-omid' ); ?>">
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

			<div class="r-nav__actions">
				<a class="r-nav__cta r-link" href="#invite"><?php esc_html_e( 'گفت‌وگوی خصوصی', 'amlak-omid' ); ?></a>
				<button class="r-burger" type="button" aria-expanded="false" aria-controls="r-overlay" aria-label="<?php esc_attr_e( 'باز کردن منو', 'amlak-omid' ); ?>">
					<span></span><span></span>
				</button>
			</div>
		</div>
	</div>
</header>

<div class="r-overlay" id="r-overlay">
	<button class="r-overlay__close" type="button" aria-label="<?php esc_attr_e( 'بستن منو', 'amlak-omid' ); ?>">&times;</button>
	<?php
	foreach ( $nav_links as $href => $label ) {
		printf( '<a href="%s">%s</a>', esc_attr( $href ), esc_html( $label ) );
	}
	?>
	<a href="#invite"><?php esc_html_e( 'گفت‌وگوی خصوصی', 'amlak-omid' ); ?></a>
</div>

<main id="main">
