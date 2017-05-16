<?php

$bannerTop = get_field('banner_top');

if( !empty($bannerTop) ): ?>

<section id="partners-for-peace" class="full-cat-front" style="background-image: url( <?php echo $bannerTop['url']; ?>)">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Partnership for Peace of Mind</h2>
        <a href="/about-us/" class="btn btn-primary blue">Read More</a>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>
