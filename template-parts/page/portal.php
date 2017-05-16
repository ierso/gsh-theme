<section id="employee-portal" class="row">

  <?php if( have_rows('portal') ): ?>

    <?php while( have_rows('portal') ): the_row();

    // vars
    $link = get_sub_field('link');
    $logo = get_sub_field('logo');
    $title = get_sub_field('title');

    ?>

    <div class="col-md-6 col-sm-12">
      <a href="<?php echo $link; ?>" class="emp-port">
        <img class="portal-logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $image['alt'] ?>" />
      </a>
      <h3><?php echo $title; ?></h3>
    </div>

    <?php endwhile; ?>

  <?php endif; ?>

</section>
