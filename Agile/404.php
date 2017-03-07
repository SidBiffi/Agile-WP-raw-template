<!DOCTYPE html>
<html>
  <head>
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
    
  <div class="container">

    <div class="row">
      <div class="col-sm-12 col-md-8 col-md-offset-2 text-content">

        <h2 class="text-center title-404">Errore 404</h2>
        <h3 class="text-center text-404">Pagina non trovata</h3>
        <h3 class="text-center"><a href="<?php echo home_url() ?>">Torna alla home</a></h3>

      </div>
    </div>

<?php get_footer(); ?>