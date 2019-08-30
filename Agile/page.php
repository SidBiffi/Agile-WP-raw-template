<?php get_header(); ?>
  <!-- Main - start -->
  <main role="main" class="content phase">
    <div class="container cpt-content">
      <div class="row">
        <div class="col-12">
          <?php while(have_posts()) : the_post(); ?>
          <p><?php the_content();?></p>
          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </main>
  <!-- Main - end -->
<?php get_footer(); ?>