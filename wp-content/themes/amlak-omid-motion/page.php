<?php
/**
 * Motion page template.
 *
 * @package Amlak_Omid_Motion
 */
get_header();
?>
<section class="m-section">
	<div class="m-container">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article <?php post_class(); ?>>
				<div class="m-pagehead m-reveal"><h1><?php the_title(); ?></h1></div>
				<div class="m-prose"><?php the_content(); wp_link_pages(); ?></div>
			</article>
			<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		endwhile;
		?>
	</div>
</section>
<?php
get_footer();
