<?php if(get_field('case_studies')): $i = 0; ?>


  <?php while(has_sub_field('case_studies')): $i++;
    // vars
    $title = get_sub_field('title');
    $logo = get_sub_field('logo');
    $lead = get_sub_field('lead_copy');
    $content = get_sub_field('content');

    ?>
  <div class="case-study row">

    <div class="col-md-2">
      <img class="cs-logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" />
    </div>
    <div class="col-md-10">
      <h2><?php echo $title; ?></h2>
      <div class="case-lead">
        <p><?php echo $lead; ?></p>
      </div>
      <div id="cs-<?php echo $i; ?>" class="collapse">
        <?php echo $content; ?>
      </div>
      <div class="arrow-collapse">
        <i class="fa fa-angle-down" aria-hidden="true" data-toggle="collapse" data-target="#cs-<?php echo $i; ?>"></i>
      </div>

    </div>
  </div>
  <?php endwhile; ?>


<?php endif; ?>
