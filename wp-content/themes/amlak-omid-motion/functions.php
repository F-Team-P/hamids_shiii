<?php
/**
 * Amlak Omid Motion (املاک امید — پویا) theme functions.
 *
 * Animation-driven variant. Shares the data layer (property CPT + customizer)
 * with the base theme; ships an entirely separate front-end (markup/CSS/JS).
 *
 * @package Amlak_Omid_Motion
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'AMLAK_MOTION_VERSION' ) ) {
	define( 'AMLAK_MOTION_VERSION', '1.0.0' );
}

function amlak_omid_setup() {
	load_theme_textdomain( 'amlak-omid', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array( 'height' => 64, 'width' => 64, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	register_nav_menus( array(
		'primary' => __( 'منوی اصلی', 'amlak-omid' ),
		'footer'  => __( 'منوی فوتر', 'amlak-omid' ),
	) );
}
add_action( 'after_setup_theme', 'amlak_omid_setup' );

function amlak_omid_content_width() {
	$GLOBALS['content_width'] = 1280;
}
add_action( 'after_setup_theme', 'amlak_omid_content_width', 0 );

function amlak_omid_assets() {
	wp_enqueue_style(
		'amlak-motion-fonts',
		'https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'amlak-motion-main', get_theme_file_uri( 'assets/css/motion.css' ), array( 'amlak-motion-fonts' ), AMLAK_MOTION_VERSION );
	wp_enqueue_style( 'amlak-motion-style', get_stylesheet_uri(), array( 'amlak-motion-main' ), AMLAK_MOTION_VERSION );
	wp_enqueue_script( 'amlak-motion-main', get_theme_file_uri( 'assets/js/motion.js' ), array(), AMLAK_MOTION_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'amlak_omid_assets' );

function amlak_omid_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'نوار کناری', 'amlak-omid' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'amlak_omid_widgets_init' );

function amlak_omid_body_classes( $classes ) {
	if ( ! in_array( 'rtl', $classes, true ) ) {
		$classes[] = 'rtl';
	}
	$classes[] = 'motion';
	return $classes;
}
add_filter( 'body_class', 'amlak_omid_body_classes' );

function amlak_omid_language_attributes( $output ) {
	if ( 0 !== strpos( get_locale(), 'fa' ) ) {
		if ( false !== strpos( $output, 'lang=' ) ) {
			$output = preg_replace( '/lang="[^"]*"/', 'lang="fa-IR"', $output, 1 );
		} else {
			$output = trim( 'lang="fa-IR" ' . $output );
		}
	}
	return $output;
}
add_filter( 'language_attributes', 'amlak_omid_language_attributes' );

/* ---------- Shared helpers ---------- */

function amlak_omid_fa_num( $string ) {
	$western = array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' );
	$persian = array( '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹' );
	return str_replace( $western, $persian, (string) $string );
}

function amlak_omid_en_num( $string ) {
	$persian = array( '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹' );
	$arabic  = array( '٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩' );
	$western = array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' );
	return str_replace( array_merge( $persian, $arabic ), array_merge( $western, $western ), (string) $string );
}

function amlak_omid_jalali_year( $timestamp = null ) {
	$timestamp = null === $timestamp ? time() : (int) $timestamp;
	$gy = (int) wp_date( 'Y', $timestamp );
	$gm = (int) wp_date( 'n', $timestamp );
	$gd = (int) wp_date( 'j', $timestamp );
	$g_d_m = array( 0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334 );
	$gy2   = ( $gm > 2 ) ? ( $gy + 1 ) : $gy;
	$days  = 355666 + ( 365 * $gy ) + ( (int) ( ( $gy2 + 3 ) / 4 ) )
		- ( (int) ( ( $gy2 + 99 ) / 100 ) ) + ( (int) ( ( $gy2 + 399 ) / 400 ) )
		+ $gd + $g_d_m[ $gm - 1 ];
	$jy    = -1595 + ( 33 * ( (int) ( $days / 12053 ) ) );
	$days  %= 12053;
	$jy    += 4 * ( (int) ( $days / 1461 ) );
	$days  %= 1461;
	if ( $days > 365 ) {
		$jy += (int) ( ( $days - 1 ) / 365 );
	}
	return $jy;
}

function amlak_omid_opt( $key, $default = '' ) {
	$value = get_theme_mod( $key, $default );
	return '' === $value ? $default : $value;
}

require get_template_directory() . '/inc/property-cpt.php';
require get_template_directory() . '/inc/customizer.php';
