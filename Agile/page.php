<?php get_header(); ?>
	
	<div class = "panel panel-default panel-body">
		<div class = "col-md-12">
		 			<div class = "row">
		 				
		 				<?php while(have_posts()) : the_post(); ?>

											
						<p><?php the_content();?></p> 							
												

						<?php endwhile; wp_reset_query(); ?>
   			
		 			</div>
		</div>
	</div>

<?php get_footer(); ?>