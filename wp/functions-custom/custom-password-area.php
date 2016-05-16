<?php 

    add_filter( 'the_password_form', 'custom_password_form' );
        function custom_password_form() {
          global $post;
          $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
          $o = '
          <form class="protected-post-form" action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post">
          ' . __( "<h1>Die Seite ist passwortgesch&uuml;tzt.</h1><p>Um Zugang zu dieser Seite zu erhalten, tragen Sie bitte Ihr Passwort in das nachfolgende Feld ein. Anschlie&szlig;end klicken Sie \"Freigeben\".</p>" ) . '
          <p style="padding-bottom: 5px;"><label class="pass-label" for="' . $label . '">' . __( "Passwort:" ) . ' </label>
          <input class="bi-pw-field" name="post_password" id="' . $label . '" type="password" style="background: #ffffff; border:1px solid #999; color:#333333; padding:10px;" size="20" /></p>
          <p style="font-size:12px;margin:0px;">Das Passwort verwendet Gro&szlig;- und Kleinschreibung</p>
          <input type="submit" name="Submit" class="bi-pw-input-button" value="' . esc_attr__( "Freigeben" ) . '" />
          </form>
          
          ';
          return $o;
    } 


 ?>