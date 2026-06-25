<?php
/**
 * Royale search form.
 *
 * @package Amlak_Omid_Royale
 */
?>
<form role="search" method="get" class="r-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="sr-only" for="r-s"><?php esc_html_e( 'جستجو', 'amlak-omid' ); ?></label>
	<input type="search" id="r-s" name="s" placeholder="<?php esc_attr_e( 'جستجو…', 'amlak-omid' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>">
	<button type="submit" class="r-btn"><?php esc_html_e( 'جستجو', 'amlak-omid' ); ?></button>
</form>
