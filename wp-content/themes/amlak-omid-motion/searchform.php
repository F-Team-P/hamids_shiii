<?php
/**
 * Motion search form.
 *
 * @package Amlak_Omid_Motion
 */
?>
<form role="search" method="get" class="m-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="sr-only" for="m-s"><?php esc_html_e( 'جستجو', 'amlak-omid' ); ?></label>
	<input type="search" id="m-s" name="s" placeholder="<?php esc_attr_e( 'جستجو…', 'amlak-omid' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>">
	<button type="submit" class="m-btn m-btn--grad"><?php esc_html_e( 'جستجو', 'amlak-omid' ); ?></button>
</form>
