<?php get_header(); ?>
	<main>
		<div class="container">
			<?php
		    	$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
		    ?>
		    <h2>About: <?php echo $curauth->nickname; ?></h2>
		    <div class="author-meta">
		        Website: <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a>
		        Profile: <?php echo $curauth->user_description; ?>
		    </div>
		    <h2>Posts by <?php echo $curauth->nickname; ?>:</h2>
		    <div class="articles">
			    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			        <article>
			            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
			            <?php the_title(); ?></a>,
			            <?php the_time('F j, Y'); ?> in <?php the_category('&');?>
			        </article>
			    <?php endwhile; else: ?>
			        <p><?php _e('No posts by this author.'); ?></p>
			    <?php endif; ?>
		    </div>
		</div>
	</main>
<?php get_footer(); ?>