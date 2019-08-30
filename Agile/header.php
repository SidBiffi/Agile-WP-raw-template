<!DOCTYPE html>
<html>
  <head>
    <title><?php if(!is_front_page()){echo wp_title('')." - ";}?><?php bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php bloginfo('stylesheet_url'); ?>?ver=<?php echo time(); ?>" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>

    <header class="header">
      <?php
      if(is_user_logged_in()){
        ?>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-4">
              <a href="<?php echo get_site_url(); ?>">
                <img class="logo" src="<?php echo get_site_url().'/wp-content/themes/FAM-template/assets/images/logo.svg'; ?>">
              </a>
            </div>
            <div class="col-8 text-right">
              <?php if( current_user_can( 'administrator' ) || current_user_can( 'editor' ) ){ ?>
              <a class="administration" href="<?php echo get_edit_post_link(get_the_ID()); ?>" target="_blank">Edit</a>
              <a class="administration" href="<?php echo admin_url(); ?>" target="_blank">Admin area</a>
              <?php } ?>
              <a class="administration" href="<?php echo wp_logout_url(home_url()); ?>" title="Logout">Logout</a>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
    </header>
