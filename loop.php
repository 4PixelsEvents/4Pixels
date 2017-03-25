<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div article id="post-<?php the_ID(); ?>" class="col33 story">
		<div class="content">
			<div class="overlay"></div>

			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?>

			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

			<?php html5wp_excerpt('html5wp_index'); ?>

			<div class="action">
				<a href="<?php the_permalink(); ?>">Lees verder</a>
			</div>
		</div>
	</div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
