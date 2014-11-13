<header class="show-for-large-up">
	<div class="icon-bar dark-bg large-horizontal five-up">
    <?php
    foreach(header_navigation() as $navigation_item) {
      $css_class = active_css_class($navigation_item[1]);
      ?>
      <a href="index.php?page=<?php echo $navigation_item[1]; ?>" id="<?php echo $navigation_item[0]; ?>" class="item <?php echo $css_class; ?>">
        <i class="fa fa-<?php echo $navigation_item[2]; ?> fa-fw"></i>
        <label><?php echo ucfirst($navigation_item[0]); ?></label>
      </a>
      <?php
    }
    ?>  
  </div>
</header>
<header class="show-for-small-only-up hide-for-large-up">
  <nav class="top-bar" id="frontpage-topbar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul class="right">
    <section class="top-bar-section">
      <ul class="right">
        <?php
        foreach(header_navigation() as $navigation_item) {
          $css_class = active_css_class($navigation_item[0]);
          ?>
          <li class='<?= $css_class ?>'>
            <a href='index.php?page=<?= $navigation_item[1]?>'>
              <?= ucfirst($navigation_item[0]) ?>
            </a>
          </li>
          <?php
        }
        ?>
      </ul>
    </section>
  </nav>
</header>

<?php 
if (isset($_GET['popup_message'])) {
  $icon = $_GET['popup_icon'];
  $message = $_GET['popup_message'];
  $color = $_GET['popup_color'];

  if(isset($_GET["popup_link"])) {
    $link = '<a href="'.$_GET["popup_link"].'">('.$_GET["popup_linktext"].')</a>';
  }

  echo '
  <div class="popup-message '.$color.'-bg" id="popup">
    <i class="fa fa-'.$icon.' fa-fw"></i>
    '.$message, $link.' 
  </div>

  <script>
    var popup_container = document.getElementById("popup");
    popup_container.className = popup_container.className + " active";
  </script>
  ';
} 
?>