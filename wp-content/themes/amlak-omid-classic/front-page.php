<?php
/**
 * The home page (صفحه نخست) for Amlak Omid.
 *
 * Assembled from modular sections in template-parts/home/.
 *
 * @package Amlak_Omid
 */

get_header();

get_template_part( 'template-parts/home/hero' );
get_template_part( 'template-parts/home/stats' );
get_template_part( 'template-parts/home/heritage' );
get_template_part( 'template-parts/home/services' );
get_template_part( 'template-parts/home/featured-properties' );
get_template_part( 'template-parts/home/why-us' );
get_template_part( 'template-parts/home/testimonials' );
get_template_part( 'template-parts/home/cta' );

get_footer();
