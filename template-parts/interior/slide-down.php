<?php if(get_field('slide_down')): $i = 0; ?>


  <?php while(has_sub_field('slide_down')): $i++;
    // vars
    $title = get_sub_field('title');
    $lead = get_sub_field('lead_copy');
    $content = get_sub_field('content');
    ?>

  <div class="case-study row">
    <?php if (get_sub_field('gray_bg') == true) { ?>
    <div class="col-md-12 gray">
    <?php } else { ?>
    <div class="col-md-12">
    <?php } ?>

      <h3><?php echo $title; ?></h3>
      <div class="case-lead">
        <p><?php echo $lead; ?></p>
      </div>
      <div id="sd-<?php echo $i; ?>" class="collapse">
        <?php echo $content; ?>
      </div>
      <div class="arrow-collapse">
        <i class="fa fa-angle-down" aria-hidden="true" data-toggle="collapse" data-target="#sd-<?php echo $i; ?>"></i>
      </div>

    </div>
  </div>
  <?php endwhile; ?>


<?php endif; ?>
