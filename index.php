<?php
/**
 * The template for displaying the index page
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
?>

<?php get_header(); ?>

<div class="jumbotron gradient-bg">
	<div class="container text-center">
		<h2>Welcome To Our Custom Site</h2>
	</div>
</div>

<div class="container">
	<?php if (have_posts() ) : ?>
		<?php while (have_posts() ) : the_post(); ?>
			<h2>A single blog post</h2>

			<?php the_title(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if(is_active_sidebar('sidebar-1')) : ?>
		<aside id="secondary" class="sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ) ?>			
		</aside>
	<?php endif ?>
</div>

<?php get_footer(); ?>