<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> -->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light gradient-bg ">
		<div class="container">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
			      <?php 
			      	wp_nav_menu(array(
			      		'theme_location' => 'primary',
			      		'menu_class'		 => 'primary_menu',
			      		'container'			 => false,
			      		'items_wrap'		=> '%3$s'
			      	));
			      ?>
			    </ul>
			  </div>
		</div>
	</nav>

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