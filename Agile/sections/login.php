<div class="login-box">
  <div class="login-form">
    <?php
      $args = array(
      'echo' =>  true,
      'redirect' => site_url(),
      'form_id' => 'loginform',
      'label_log_in' => __( 'Log In' ),
      'label_username' => __( 'Username' ),
      'id_username' => 'user_login',
      'id_password' => 'user_pass',
      'id_remember' => 'rememberme',
      'id_submit' => 'wp-submit',
      'remember' => false,
      'value_username' => NULL,
      'value_remember' => false );
    ?>
    <?php wp_login_form( $args ); ?>
  </div>
</div>