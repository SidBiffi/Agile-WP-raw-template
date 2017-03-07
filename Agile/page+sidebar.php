<?php get_header(); 
/*
Template Name: +sidebar 
*/
?>
	
	<div class = "row">
		<div class = "col-md-8">
			<div class = "panel panel-default panel-body">

					<?php while(have_posts()) : the_post(); ?>

						<p><?php the_content();?></p> 							
												
					<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>
		<div class = "col-md-4">

		 <?php	
 			if ( is_home() ) :
  				get_sidebar( 'home-sidebar' );
			 elseif ( is_404() ) :
  				get_sidebar( '404-sidebar' );
			 else :
  				get_sidebar( 'page-sidebar' );
			 endif;
		 ?>

		</div>
	</div>

<?php get_footer(); ?>
