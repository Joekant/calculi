 <div class="row">
  <div class="large-12 columns half-padding text-center">
    <h1 id="headline">Unsere Experten</h1>
    <h2 class="subline">Suche & finde den perfekten Partner</h2>
  </div>
</div>

<div class="row">
  <div class="medium-4 columns">
    <label for="email">Name</label>
    <input type="text" id="remail" placeholder="Max Mustermann">
  </div>

  <div class="medium-4 columns">
    <label for="email">Ort</label>
    <input type="text" id="remail" placeholder="Wien">
  </div>

  <div class="medium-4 columns">
    <label for="email">Bewertung</label>
    
<div class="range-slider" data-slider data-options="step: 20;">
  <span class="range-slider-handle" role="slider" tabindex="0"></span>
  <span class="range-slider-active-segment"></span>
  <input type="hidden">
</div>

  </div>
</div>


    <div class="row half-bottom">
     <details class="padding-top">
      <summary>
        <i class="fa fa-question fa-fw"></i> Bewertungslegende anzeigen
      </summary>
      <div class="medium-3 columns">
        <ul class="legende padding-top">
          <li class="green-bg">gute Bewertung</i></li>
          <li class="yellow-bg">mittlere Bewertung</li>
          <li class="red-bg">schlechte Bewertung</li>

        </ul>
      </div>
      <div class="medium-9 columns">
        <ul class="padding-top">
          <li><i class="fa fa-comment fa-fw"></i> Kommunikation</li>
          <li><i class="fa fa-clock-o fa-fw"></i> Geschwindigkeit</li>
          <li><i class="fa fa-pencil fa-fw"></i> Dokumentation</li>
          <li><i class="fa fa-star fa-fw"></i> Qualität</li>
          <li><i class="fa fa-gear fa-fw"></i> Technik</li>
        </ul>
      </div>
    </details>
  </div>

</div>

<div class="row" data-equalizer>

<?php 
  $designer = array('Joel Cantillo', 'Julian Haidner', 'Clemens Bauer', 'Philipp Schneeberger', 'Lukas Weichselbaumer', 'Chanel de Castro', 'Calin Teodorescu', 'Ahmet Öztürk', 'Kaitlin Rathwell');
  for($i=0;$i<9;$i++) {
?>


  <div class="medium-4 columns">
   <div class="profile">
    <div class="profile-head">
      <a href="index.php?page=profile" class="overlay">
        <span class="plus"><i class="fa fa-search fa-fw"></i></span> 
      </a>
      <img src="img/thumb.jpeg" alt="">
     <h2 class="overlay-name profile-name text-center"><?php echo $designer[$i]; ?></h2>
   </div>
   <div class="profile-body" data-equalizer-watch>
    Ich arbeite seit 2004 als professioneller Webdesigner und habe in der Vergangenheit bereits zahlreiche Kundenprojekte erfolgreich abgewickelt. 
  </div> 
  <div class="profile-rating  text-center">
    <div class="points">
      <ul class="inline-list">
        <li class="green-bg w9"><i class="fa fa-comment fa-fw"></i></li>
        <li class="red-bg"><i class="fa fa-clock-o fa-fw"></i></li>
        <li class="red-bg"><i class="fa fa-pencil fa-fw"></i></li>
        <li class="yellow-bg"><i class="fa fa-star fa-fw"></i></li>
        <li class="green-bg"><i class="fa fa-gear fa-fw"></i></li>
      </ul>
    </div>
  </div>
</div>
</div>
<?php } ?>

  <ul class="pagination" role="menubar" aria-label="Pagination">
    <li class="arrow unavailable" aria-disabled="true"><a href="">&laquo; zurück</a></li>
    <li class="current"><a href="">1</a></li>
    <li><a href="">2</a></li>
    <li><a href="">3</a></li>
    <li><a href="">4</a></li>
    <li class="unavailable" aria-disabled="true"><a href="">&hellip;</a></li>
    <li><a href="">12</a></li>
    <li><a href="">13</a></li>
    <li class="arrow"><a href="">weiter &raquo;</a></li>
  </ul>

</div>
<div class="full-padding"></div>
