<nav class="navbar navbar-primary" role="navigation">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-master">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/services-overview/circle-of-service/">
            ALWAYS ON<sup>&trade;</sup>
          </a>
        </div>
      </div>
      <div id="primary-menu" class="col-md-9">

          <?php
              wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-2',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?>

      </div>
      <div id="master-menu" class="col-md-9">
          <?php
              wp_nav_menu( array(
                  'menu'              => 'master-menu',
                  'theme_location'    => 'master-menu',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'navbar-master',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?>
      </div>

    </div>
  </div>
</nav>
