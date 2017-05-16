<section id="home-nav">

  <?php if( have_rows('home_nav') ): ?>

  <div class="home-nav container">
    <div class="row">

    <?php while( have_rows('home_nav') ): the_row();

		// vars
		$link = get_sub_field('nav-link');
		$image = get_sub_field('nav-img');
		$title = get_sub_field('nav-title');

		?>

      <div class="col-md-3 col-sm-3">
        <a class="home-nav-geo-block" href="<?php echo $link; ?>">
          <img class="home-nav-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
        </a>
        <h3 class="home-nav-geo"><?php echo $title; ?></h3>
      </div>

      <?php endwhile; ?>

    </div>
  </div>

  <?php endif; ?>

</section>
