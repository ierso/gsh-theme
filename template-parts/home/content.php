<section id="home-content">
  <div class="container">
    <div class="row what-it-takes">
      <div class="col-md-12">
        <img class="icon-cat-img" src="<?php bloginfo('template_directory'); ?>/img/home/logo-swoosh.png" alt="gsh">
        <h1>What it Takes<sup>&trade;</sup> facilities management for more than 120 Years</h1>
      </div>
    </div>

    <?php get_template_part( 'template-parts/home/what-it-takes', 'page' ); ?>

    <?php if( have_rows('call_to_action_content') ): ?>

    <div class="row cat-content">

      <?php while( have_rows('call_to_action_content') ): the_row();

      // vars
  		$link = get_sub_field('link');
  		$image = get_sub_field('image');
  		$title = get_sub_field('title');
      $copy = get_sub_field('copy');
      $color = get_sub_field('color');

  		?>

      <div class="col-md-3">
        <img class="icon-cat-img" src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>">
        <h3><?php echo $title; ?></h3>
        <p><?php echo $copy; ?></p>
        <a href="<?php echo $link; ?>" class="btn btn-primary <?php echo $color; ?>">Learn More</a>
      </div>

      <?php endwhile; ?>

    </div>

    <?php endif; ?>

    <?php get_template_part( 'template-parts/home/circle-service', 'page' ); ?>

  </div>
</section>
