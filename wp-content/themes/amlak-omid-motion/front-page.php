<?php
/**
 * Motion home page — animation-driven layout.
 *
 * @package Amlak_Omid_Motion
 */

get_header();

get_template_part( 'template-parts/home/hero' );
get_template_part( 'template-parts/home/stats' );
get_template_part( 'template-parts/home/showcase' );
get_template_part( 'template-parts/home/heritage' );
get_template_part( 'template-parts/home/services' );
get_template_part( 'template-parts/home/testimonials' );
get_template_part( 'template-parts/home/cta' );

get_footer();
