<nav class="navbar">
  <div class="container">
    <div class="navbar-header">
      <ul class="contact-info list-inline">
        <li><a href="tel:0333 3444950"><i class="fa fa-phone"></i><span class="number"> 03333 444950</span></a></li>
        <li><a href="mailto:info@identityexperts.co.uk"><i class="fa fa-paper-plane"></i>info@identityexperts.co.uk</a></li>
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
