<?php if (have_posts()) : ?>        
	<?php while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>
		<?php the_content(); ?>
		<div class="downloads">
			Downloads: 
			<?php
				$images = array();
				$image_sizes = get_intermediate_image_sizes();
				array_unshift( $image_sizes, 'full' );
				foreach( $image_sizes as $image_size ) {
					$image = wp_get_attachment_image_src( get_the_ID(), $image_size );
					$name = $image_size . ' (' . $image[1] . 'x' . $image[2] . ')';
					$images[] = '<a href="' . $image[0] . '">' . $name . '</a>';
				}
				echo implode( ' | ', $images );
			?>
		</div>
	<?php endwhile; ?>
<?php endif; ?>