<?php get_header(); ?>
	<main>
		<div class="container">
			<div class="content">
				<?php get_template_part( 'partials/content', 'post' ); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</main>
<?php get_footer(); ?>