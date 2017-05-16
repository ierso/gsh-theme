<?php if( have_rows('what_it_takes') ): ?>

<div class="row what-it-takes-sub">
  <?php while( have_rows('what_it_takes') ): the_row();

  // vars
  $link = get_sub_field('link');
  $content = get_sub_field('content');
  ?>

  <div class="col-md-8 col-md-offset-2">
    <p><?php echo $content; ?></p>
    <a href="<?php echo $link; ?>" class="btn btn-primary red">Learn More</a>
  </div>

  <?php endwhile; ?>

</div>

<?php endif; ?>
