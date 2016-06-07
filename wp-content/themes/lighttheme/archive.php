<?php get_header(); ?>
	<main>
		<div class="container">
			<h1><?php the_archive_title(); ?></h1>
			<?php get_template_part( 'partials/content', 'post-list' ); ?>
		</div>
	</main>
<?php get_footer(); ?>