<?php get_header();
/*
Template Name: Privacy policy
*/
?>
  <!-- Main - start -->
  <main role="main" class="content privacy-policy">
    <div class="container-fluid">
      <div class="row cover-block">
        <div class="container title-block">
          <div class="row">
            <div class="col-12">
              <div class="white-box">
                <h1 class="title">Privacy policy</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container cpt-content">
      <div class="row breadcrumb-row">
      <div class="col-12">
        <div class="breadcrumb-container">
          <a class="item" href="<?php echo get_site_url(); ?>">Home</a> > <a class="item" href="<?php echo get_the_permalink(); ?>">Privacy policy</a>
        </div>
      </div>
    </div>
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
