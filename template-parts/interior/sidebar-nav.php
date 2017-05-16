<div class="sidebar">
  <div class="sidebar-nav">
    <!-- get parent page-->
    <?php
      $parent_permalink = get_the_permalink($post->post_parent);
    ?>
    <!-- display parent -->


    <!-- get and display children of parent -->
    <?php
      if($post->post_parent)
      $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
      else
      $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
      if ($children) { ?>
      <h4>

        <?php

          $current = $post->ID;

          $parent = $post->post_parent;

          $grandparent_get = get_post($parent);

          $grandparent = $grandparent_get->post_parent;

          ?>

          <?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {
            echo get_the_title($grandparent);
          }else {
            echo get_the_title($parent);
          }?>

      </h4>
      <ul class="side-nav-list">
      <?php echo $children; ?>
      </ul>
    <?php } ?>
  </div>
</div>
