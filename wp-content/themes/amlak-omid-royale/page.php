<?php
/**
 * Royale page template.
 *
 * @package Amlak_Omid_Royale
 */

get_header();
?>
<section class="r-section">
	<div class="r-container">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article <?php post_class(); ?>>
				<div class="r-pagehead r-reveal">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="r-prose">
					<?php
					the_content();
					wp_link_pages();
					?>
				</div>
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
