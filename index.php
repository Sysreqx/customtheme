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
	</div>

	<?php wp_footer() ?>
</body>
</html>