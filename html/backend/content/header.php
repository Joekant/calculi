<header>
 <div class="icon-bar large-horizontal six-up">
    <?php
          foreach(header_navigation() as $navigation_item) {
              $css_class = active_css_class($navigation_item[0]);
      ?>
          <a href="<?php echo $navigation_item[1]; ?>" class="item <?php echo $css_class; ?>">
            <i class="fa fa-<?php echo $navigation_item[2]; ?> fa-fw"></i>
            <label><?php echo ucfirst($navigation_item[0]); ?></label>
          </a>
    <?php
      }
    ?>  
  </div>
</header>