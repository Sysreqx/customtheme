<?php
/**
 * The template for displaying the page type
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
?>

<?php get_header(); ?>

<div class="container">
	<?php if (have_posts() ) : ?>
		<?php while (have_posts() ) : the_post(); ?>

			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>