<section id="service-overview">

  <?php if( have_rows('services_overview_first_row') ): ?>
  <div class="row so-grp">
    <?php while( have_rows('services_overview_first_row') ): the_row();

    // vars
    $title = get_sub_field('title');
    $image = get_sub_field('background_image');
    $content = get_sub_field('hover_content');
    ?>
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="cos" style="background-image: url( <?php echo $image['url']; ?>)">
        <h3><?php echo $title; ?></h3>
        <?php echo $content; ?>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
  <?php endif; ?>

  <?php if( have_rows('services_overview_second_row') ): ?>
  <div class="row so-grp">
    <?php while( have_rows('services_overview_second_row') ): the_row();

    // vars
    $title = get_sub_field('title');
    $image = get_sub_field('background_image');
    $content = get_sub_field('hover_content');
    ?>
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="cos" style="background-image: url( <?php echo $image['url']; ?>)">
        <h3><?php echo $title; ?></h3>
        <?php echo $content; ?>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
  <?php endif; ?>

  <div class="row">
    <div class="col-md-12">

      <?php

      $pdf = get_field('download_pdf');

      if( $pdf ): ?>

      <a class="pdf-dl" href="<?php echo $pdf['url']; ?>">Download this page as a PDF</a>

      <?php endif; ?>

    </div>
  </div>

</section>
