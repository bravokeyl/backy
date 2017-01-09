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
      <a class="navbar-brand" href="/">
      <img src="/wp-content/themes/identity-experts/img/logo.png" alt="Identity Experts Logo">
      </a>

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
