<section id="icon-cat-front" class="icon-cat">
  <div class="container">

    <?php if( have_rows('icon_call_to_action') ): ?>

    <div class="row">

      <?php while( have_rows('icon_call_to_action') ): the_row();

      // vars
  		$link = get_sub_field('link');
  		$icon = get_sub_field('icon');
  		$title = get_sub_field('title');
      $copy = get_sub_field('copy');

  		?>

      <div class="col-md-4">
        <h3><?php echo $title; ?></h3>
        <a href="<?php echo $link; ?>">
          <img class="icon-cat-img" src="<?php echo $icon; ?>" alt="<?php echo $image['alt'] ?>">
        </a>
        <p><?php echo $copy; ?></p>
      </div>

      <?php endwhile; ?>

    </div>

    <?php endif; ?>

  </div>
</section>
