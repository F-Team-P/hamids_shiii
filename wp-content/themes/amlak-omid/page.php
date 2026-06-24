<?php
/**
 * Generic page template.
 *
 * @package Amlak_Omid
 */

get_header();
?>

<div class="section">
	<div class="container" style="max-width:820px">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article <?php post_class(); ?>>
				<div class="heading">
					<h2><?php the_title(); ?></h2>
					<span class="rule"></span>
				</div>
				<div class="entry-content">
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
</div>

<?php
get_footer();
