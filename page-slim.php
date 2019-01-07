<?php
/**
 * Template Name: Slim Page
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php if (have_posts() ) : ?>
				<?php while (have_posts() ) : the_post(); ?>

					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>