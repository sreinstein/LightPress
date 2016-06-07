<?php get_header(); ?>
	<main>
		<div class="container">
			<h1>Search Term: <?php echo get_search_query(); ?></h1>
			<?php get_template_part( 'partials/content', 'post-list' ); ?>
		</div>
	</main>
<?php get_footer(); ?>