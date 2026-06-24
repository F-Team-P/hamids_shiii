<?php
/**
 * Search form.
 *
 * @package Amlak_Omid
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="sr-only" for="amlak-s"><?php esc_html_e( 'جستجو', 'amlak-omid' ); ?></label>
	<div style="display:flex;gap:.5rem">
		<input type="search" id="amlak-s" class="search-field" name="s"
			placeholder="<?php esc_attr_e( 'جستجو در سایت…', 'amlak-omid' ); ?>"
			value="<?php echo esc_attr( get_search_query() ); ?>"
			style="flex:1;padding:.7rem .8rem;border:1px solid var(--line);border-radius:10px;background:var(--cream)" />
		<button type="submit" class="btn btn--primary"><?php esc_html_e( 'جستجو', 'amlak-omid' ); ?></button>
	</div>
</form>
