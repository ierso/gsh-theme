<div class="last-post row">
  <div class="col-md-12">
    <div class="last-post-bg">
      <?php
        $args = array( 'numberposts' => '1' );
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent ){
          echo '<h4><span class="important">NEWS:</span>  ' .   $recent["post_title"].'</h4><a class="btn btn-primary red" href="' . get_permalink($recent["ID"]) . '">Read More</a> ';
        }
        wp_reset_query();
      ?>
    </div>
  </div>
</div>

<div class="page-nav row">
  <div class="col-md-4">
    <a href="/about-us/" class="pn-wrapper">
      <h3>About GSH</h3>
      <span class="blue-nav">ABOUT</span>
      <div id="pn-about" class="nav-block">
      </div>
    </a>
  </div>
  <div class="col-md-4">
    <a href="/services-overview/" class="pn-wrapper">
      <h3>GSH Services</h3>
      <span class="blue-nav">SERVICES</span>
      <div id="pn-services" class="nav-block">
      </div>
    </a>
  </div>
  <div class="col-md-4">
    <a href="/contact/" class="pn-wrapper">
      <h3>Contact Us</h3>
      <span class="blue-nav">CONTACT</span>
      <div id="pn-contact" class="nav-block">
      </div>
    </a>
  </div>
</div>
