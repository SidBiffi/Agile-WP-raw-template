<?php get_header();
/*
Template Name: Homepage
*/
?>

  <!-- Main - start -->
  <main role="main" class="content homepage">
    <?php
      if(!is_user_logged_in()){
        require_once( dirname(__file__).'/sections/login.php' );
      }
      else{
        global $current_user;
        $current_user = wp_get_current_user();
        $queried_object = get_queried_object();
        if($queried_object && 0 != $current_user->ID){
          $featured_img_url = get_the_post_thumbnail_url($post_id,'full');
          ?>
          <div class="container-fluid">
            <div class="row cover-block" style="background-image:url(<?php echo $featured_img_url; ?>);"></div>
          </div>
          <div class="container content-box">
            <div class="row">
              <div class="col-12">
                <!-- CONTENT -->
              </div>
            </div>
          </div>
        <?php
        }else{
          // show error/redirect
        }
      }
    ?>
  </main>
  <!-- Main - end -->

<?php get_footer(); ?>
