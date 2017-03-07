<?php get_header(); ?>
	
				<div class = "row">
					<div class = "col-md-9">
						<div class = "panel panel-default panel-body">

							<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1 ) ); ?>
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<h2><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p = "tesxt-muted"><?php the_author(); ?> il <?php the_time('jS F, Y'); ?></p> 							
								<p><?php the_excerpt(''); ?></p> 	

							<?php endwhile; wp_reset_query(); ?>

						</div>
					</div>
					<div class = "col-md-3">

						<?php get_sidebar(); ?>

					</div>
				</div>

<?php get_footer(); ?>
