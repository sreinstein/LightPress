<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post();  ?>
		<article>
			<div class="title"><?php the_title(); ?></div>
			<div class="meta">
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
					<?php the_author(); ?>
				</a>
				<?php the_time('F j, Y'); ?>
				<?php the_category(', '); ?>
			</div>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>">Read More</a>
		</article>
	<?php endwhile; ?>
		<div class="pagination">
			<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
		</div>
	<?php else : ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>