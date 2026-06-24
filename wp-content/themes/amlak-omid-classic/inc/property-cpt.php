<?php
/**
 * «املاک» custom post type + taxonomies + listing meta.
 *
 * @package Amlak_Omid
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register the `property` post type and its taxonomies.
 */
function amlak_omid_register_property() {
	$labels = array(
		'name'               => __( 'املاک', 'amlak-omid' ),
		'singular_name'      => __( 'ملک', 'amlak-omid' ),
		'add_new'            => __( 'افزودن ملک', 'amlak-omid' ),
		'add_new_item'       => __( 'افزودن ملک جدید', 'amlak-omid' ),
		'edit_item'          => __( 'ویرایش ملک', 'amlak-omid' ),
		'new_item'           => __( 'ملک جدید', 'amlak-omid' ),
		'view_item'          => __( 'مشاهده ملک', 'amlak-omid' ),
		'search_items'       => __( 'جستجوی املاک', 'amlak-omid' ),
		'not_found'          => __( 'ملکی یافت نشد', 'amlak-omid' ),
		'not_found_in_trash' => __( 'ملکی در زباله‌دان نیست', 'amlak-omid' ),
		'menu_name'          => __( 'املاک', 'amlak-omid' ),
	);

	register_post_type( 'property', array(
		'labels'        => $labels,
		'public'        => true,
		'has_archive'   => true,
		'menu_icon'     => 'dashicons-admin-home',
		'menu_position' => 5,
		'rewrite'       => array( 'slug' => 'amlak' ),
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'show_in_rest'  => true,
	) );

	register_taxonomy( 'property_type', 'property', array(
		'labels'            => array(
			'name'          => __( 'نوع ملک', 'amlak-omid' ),
			'singular_name' => __( 'نوع ملک', 'amlak-omid' ),
		),
		'hierarchical'      => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'rewrite'           => array( 'slug' => 'noe-melk' ),
	) );

	register_taxonomy( 'property_deal', 'property', array(
		'labels'            => array(
			'name'          => __( 'نوع معامله', 'amlak-omid' ),
			'singular_name' => __( 'نوع معامله', 'amlak-omid' ),
		),
		'hierarchical'      => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'rewrite'           => array( 'slug' => 'moamele' ),
	) );

	register_taxonomy( 'property_location', 'property', array(
		'labels'            => array(
			'name'          => __( 'محله / منطقه', 'amlak-omid' ),
			'singular_name' => __( 'محله', 'amlak-omid' ),
		),
		'hierarchical'      => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'rewrite'           => array( 'slug' => 'mahalle' ),
	) );
}
add_action( 'init', 'amlak_omid_register_property' );

/**
 * Listing detail meta box (price, area, rooms, ...).
 */
function amlak_omid_property_metabox() {
	add_meta_box(
		'amlak_omid_details',
		__( 'مشخصات ملک', 'amlak-omid' ),
		'amlak_omid_property_metabox_html',
		'property',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'amlak_omid_property_metabox' );

/**
 * Fields shared by the meta box and the save handler.
 */
function amlak_omid_property_fields() {
	return array(
		'_amlak_price'  => __( 'قیمت (تومان)', 'amlak-omid' ),
		'_amlak_area'   => __( 'متراژ (متر مربع)', 'amlak-omid' ),
		'_amlak_rooms'  => __( 'تعداد اتاق', 'amlak-omid' ),
		'_amlak_year'   => __( 'سال ساخت', 'amlak-omid' ),
		'_amlak_badge'  => __( 'برچسب (فروش/اجاره)', 'amlak-omid' ),
	);
}

/**
 * Render the meta box.
 */
function amlak_omid_property_metabox_html( $post ) {
	wp_nonce_field( 'amlak_omid_save_property', 'amlak_omid_property_nonce' );
	echo '<div style="display:grid;gap:12px;max-width:520px">';
	foreach ( amlak_omid_property_fields() as $key => $label ) {
		$value = get_post_meta( $post->ID, $key, true );
		printf(
			'<p style="margin:0"><label style="font-weight:700;display:block;margin-bottom:4px" for="%1$s">%2$s</label>
			<input type="text" id="%1$s" name="%1$s" value="%3$s" class="widefat" /></p>',
			esc_attr( $key ),
			esc_html( $label ),
			esc_attr( $value )
		);
	}
	echo '</div>';
}

/**
 * Save listing meta.
 */
function amlak_omid_save_property( $post_id ) {
	if ( ! isset( $_POST['amlak_omid_property_nonce'] ) ||
		! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['amlak_omid_property_nonce'] ) ), 'amlak_omid_save_property' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	foreach ( array_keys( amlak_omid_property_fields() ) as $key ) {
		if ( isset( $_POST[ $key ] ) ) {
			update_post_meta( $post_id, $key, sanitize_text_field( wp_unslash( $_POST[ $key ] ) ) );
		}
	}
}
add_action( 'save_post_property', 'amlak_omid_save_property' );

/**
 * Flush rewrite rules on theme activation so the /amlak archive works.
 */
function amlak_omid_rewrite_flush() {
	amlak_omid_register_property();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'amlak_omid_rewrite_flush' );
