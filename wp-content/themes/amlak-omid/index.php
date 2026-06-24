<?php
/**
 * Fallback template — blog/archive listing.
 *
 * @package Amlak_Omid
 */

get_header();
?>

<div class="section">
	<div class="container">
		<?php if ( have_posts() ) : ?>

			<div class="heading">
				<span class="eyebrow"><?php esc_html_e( 'اخبار و مقالات', 'amlak-omid' ); ?></span>
				<h1><?php is_home() ? esc_html_e( 'تازه‌های املاک امید', 'amlak-omid' ) : the_archive_title(); ?></h1>
				<span class="rule"></span>
			</div>

			<div class="props__grid">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article <?php post_class( 'prop-card' ); ?>>
						<a class="prop-card__media" href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php else : ?>
								<span class="ph-icon" aria-hidden="true">🏠</span>
							<?php endif; ?>
						</a>
						<div class="prop-card__body">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
							<div class="prop-card__foot">
								<a class="btn btn--ghost" href="<?php the_permalink(); ?>"><?php esc_html_e( 'ادامه مطلب', 'amlak-omid' ); ?></a>
							</div>
						</div>
					</article>
					<?php
				endwhile;
				?>
			</div>

			<div class="props__more">
				<?php the_posts_pagination( array( 'mid_size' => 1 ) ); ?>
			</div>

		<?php else : ?>
			<div class="heading">
				<h1><?php esc_html_e( 'موردی یافت نشد', 'amlak-omid' ); ?></h1>
				<p><?php esc_html_e( 'متأسفانه محتوایی برای نمایش وجود ندارد.', 'amlak-omid' ); ?></p>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php
get_footer();
