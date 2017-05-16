<?php if( have_rows('circle_service') ): ?>

<div class="row what-it-takes-sub">
  <?php while( have_rows('circle_service') ): the_row();

  // vars
  $link = get_sub_field('link');
  $content = get_sub_field('content');
  $title = get_sub_field('title');
  ?>

  <div class="col-md-8 col-md-offset-2">
    <h1><?php echo $title; ?></h1>
    <p><?php echo $content; ?></p>
    <a href="<?php echo $link; ?>" class="btn btn-primary red">Discover the Advantages</a>
  </div>

  <?php endwhile; ?>

</div>

<?php endif; ?>
