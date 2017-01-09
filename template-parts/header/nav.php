<nav class="navbar">
  <div class="container">
    <div class="navbar-header">
      <ul class="contact-info list-inline">
        <?php
          $email = get_theme_mod( 'contact_email' );
          $pno = get_theme_mod( 'contact_number' );
        ?>
        <li><a href="tel:<?php echo esc_attr($pno);?>"><i class="fa fa-phone"></i><span class="number"><?php echo $pno;?></span></a></li>
        <li><a href="mailto:<?php echo esc_attr($email);?>"><i class="fa fa-paper-plane"></i><?php echo get_theme_mod( 'contact_email' );?></a></li>
      </ul>
      <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      if ( $custom_logo_id ) {
          $html = sprintf( '<a href="%1$s" class="navbar-brand custom-logo-link" >%2$s</a>',
              esc_url( home_url( '/' ) ),
              wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                  'class'    => 'custom-logo',
                  'itemprop' => 'logo',
              ) )
          );
      }
      echo $html;
      ?>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar-1">
      <div class="row">
        <?php wp_nav_menu( array(
          'theme_location' => 'top',
          'menu_id'        => 'top-menu',
          'menu_class'     => 'top-menu nav navbar-nav',
        ) );?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
