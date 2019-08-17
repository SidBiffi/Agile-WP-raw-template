<?php get_header(); ?>
	
  <main class="container">
    <div class="row">
      <div class="col-12">

          <?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1 ) ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="thumbnail">
            <h2><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="tesxt-muted"><?php the_author(); ?> il <?php the_time('jS F, Y'); ?></p> 							
            <p><?php the_excerpt(''); ?></p> 	

          <?php endwhile; wp_reset_query(); ?>
          
      </div>
    </div>
  </main>

<?php get_footer(); ?>
