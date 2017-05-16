<nav id="geo-nav" class="navbar navbar-top" role="navigation">
  <div class="container">
    <div id="portal-wrapper" class="row">
      <div class="col-md-12">
        <div class="portal-wrapper">
          <div class="portal-position">
            <a class="portal" href="/employee-portal/">Employee Portal</a>
            <ul id="social">
              <li><a href="https://twitter.com/gshgroup"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
  						<li><a href="https://www.facebook.com/georgeshallinc/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
  						<li><a href="https://www.linkedin.com/company/6707762"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="navbar-header">
          <a class="gsh-brand" href="<?php echo home_url(); ?>">
            <img id="gsh-logo" src="<?php bloginfo('template_directory'); ?>/img/home/gsh-logo.png" alt="gsh logo">
            <span class="logo-slogan">Facilities Management Services</span>
          </a>
        </div>
      </div>
      <div class="col-md-9">
        <?php
            wp_nav_menu( array(
                'menu'              => 'top-menu',
                'theme_location'    => 'top-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbar-top',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
      </div>

    </div>
  </div>
</nav>
