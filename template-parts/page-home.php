<?php
/**
 * Template Name: Home Page
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
?>

<?php get_header(); ?>

<div class="jumbotron gradient-bg">
	<div class="container text-center">
		<h1>Welcome To Our Custom Site</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<?php if (have_posts() ) : ?>
			<?php while (have_posts() ) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>