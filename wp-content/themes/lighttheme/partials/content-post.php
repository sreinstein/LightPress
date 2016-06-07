<article>
	<?php if (have_posts()) : ?>        
		<?php while (have_posts()) : the_post(); ?>
			<div class="title"><?php the_title(); ?></div>
			<div class="meta">
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
					<?php the_author(); ?>
				</a>
				<?php the_time('F j, Y'); ?>
				<?php the_category(', '); ?>
			</div>
			<?php the_content(); ?>
			<div class="comment-list">
		    	<?php if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif; ?>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</article>