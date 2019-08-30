<?php get_header(); ?>

  <!-- Main - start -->
  <main role="main" class="content page-404">
    <div class="container-fluid">
      <div class="row cover-block" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/FAM-template/assets/images/fam_placeholder.jpg');"></div>
    </div>
    <div class="container content-box">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center title-404">Errore 404</h2>
          <h3 class="text-center subtitle-404">Pagina non trovata</h3>
          <h3 class="text-center link-404"><a href="<?php echo home_url() ?>">Torna alla home</a></h3>
        </div>
      </div>
    </div>
  </main>
  <!-- Main - end -->

<?php get_footer(); ?>
