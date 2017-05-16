<?php if( have_rows('env_management') ): ?>

<div class="row env-management">

  <?php while( have_rows('env_management') ): the_row();

  // vars
  $title = get_sub_field('title');
  $link = get_sub_field('link');
  $content = get_sub_field('content');
  ?>

  <div class="col-md-6 col-md-offset-3">
    <h1><?php echo $title; ?></h1>
    <p><?php echo $content; ?></p>
    <a href="<?php echo $link; ?>" class="btn btn-primary red">Learn More</a>
  </div>

  <?php endwhile; ?>

</div>

<?php endif; ?>
