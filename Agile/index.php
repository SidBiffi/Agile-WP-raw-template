<?php get_header(); ?>

  <!-- Main - start -->
  <main role="main" class="content homepage">
    <?php
      if(!is_user_logged_in()){
        require_once( dirname(__file__).'/sections/login.php' );
      }
      else{
        global $current_user;
        wp_get_current_user();
        ?>
        <div class="container-fluid">
          <div class="row cover-block" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/FAM-template/assets/images/fam_placeholder.jpg');"></div>
        </div>
        <div class="container content-box">
          <div class="row">
            <div class="col-12">
              <!-- CONTENT -->
            </div>
          </div>
        </div>
        <?php
      }
    ?>
  </main>
  <!-- Main - end -->

<?php get_footer(); ?>