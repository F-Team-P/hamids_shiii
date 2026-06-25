<?php
/**
 * Theme Customizer — editable hero copy, heritage year and contact details.
 *
 * @package Amlak_Omid
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Customizer settings/controls.
 */
function amlak_omid_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'amlak_omid_home', array(
		'title'    => __( 'تنظیمات املاک امید', 'amlak-omid' ),
		'priority' => 20,
	) );

	/* ---- Heritage / brand ---- */
	$wp_customize->add_section( 'amlak_heritage', array(
		'title' => __( 'میراث و برند', 'amlak-omid' ),
		'panel' => 'amlak_omid_home',
	) );

	// Hero title/lead are intentionally part of the fixed Royale art-direction,
	// so only the heritage values that the layout actually consumes are exposed.
	$fields = array(
		'amlak_year_founded'   => array( __( 'سال تأسیس (شمسی)', 'amlak-omid' ), '۱۳۵۴', 'text' ),
		'amlak_years_exp'      => array( __( 'سال‌های تجربه (عدد)', 'amlak-omid' ), '50', 'text' ),
	);

	foreach ( $fields as $id => $cfg ) {
		$wp_customize->add_setting( $id, array(
			'default'           => $cfg[1],
			'sanitize_callback' => 'textarea' === $cfg[2] ? 'sanitize_textarea_field' : 'sanitize_text_field',
		) );
		$wp_customize->add_control( $id, array(
			'label'   => $cfg[0],
			'section' => 'amlak_heritage',
			'type'    => 'textarea' === $cfg[2] ? 'textarea' : 'text',
		) );
	}

	/* ---- Contact ---- */
	$wp_customize->add_section( 'amlak_contact', array(
		'title' => __( 'اطلاعات تماس', 'amlak-omid' ),
		'panel' => 'amlak_omid_home',
	) );

	$contact = array(
		'amlak_phone'   => array( __( 'تلفن', 'amlak-omid' ), '۰۲۱-۱۲۳۴۵۶۷۸' ),
		'amlak_mobile'  => array( __( 'همراه', 'amlak-omid' ), '۰۹۱۲-۰۰۰۰۰۰۰' ),
		'amlak_email'   => array( __( 'ایمیل', 'amlak-omid' ), 'info@amlak-omid.ir' ),
		'amlak_address' => array( __( 'آدرس', 'amlak-omid' ), 'تهران، خیابان ولیعصر، نبش کوچه امید، پلاک ۱۳۵۴' ),
		'amlak_hours'   => array( __( 'ساعات کاری', 'amlak-omid' ), 'شنبه تا پنجشنبه، ۹ تا ۲۰' ),
		'amlak_instagram' => array( __( 'اینستاگرام (نشانی)', 'amlak-omid' ), '#' ),
		'amlak_telegram'  => array( __( 'تلگرام (نشانی)', 'amlak-omid' ), '#' ),
		'amlak_whatsapp'  => array( __( 'واتساپ (نشانی)', 'amlak-omid' ), '#' ),
	);

	foreach ( $contact as $id => $cfg ) {
		$wp_customize->add_setting( $id, array(
			'default'           => $cfg[1],
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( $id, array(
			'label'   => $cfg[0],
			'section' => 'amlak_contact',
			'type'    => 'text',
		) );
	}
}
add_action( 'customize_register', 'amlak_omid_customize_register' );
