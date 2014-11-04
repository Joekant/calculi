<header>

  <nav class="top-bar" id="frontpage-topbar" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <a href="index.php" class="show-for-medium-up"><img src="../img/logo_inline.png" class="logo" alt="caluli_logo" /></a>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>
    <section class="top-bar-section">
      <ul class="right">
        <?php
        foreach(header_navigation() as $navigation_item) {
          $css_class = active_css_class($navigation_item[0]);
          ?>
          <li class='<?= $css_class ?>'>
            <a href='<?= $navigation_item[1] ?>'>
              <?= ucfirst($navigation_item[0]) ?>
            </a>
          </li>
          <?php
        }
        ?>
      </ul>
    </section>
  </nav>
  <div class="show-for-small-only text-center"><img src="../img/logo.png" class="logo" id="logo_small" alt="caluli_logo" /></div>
</header>

