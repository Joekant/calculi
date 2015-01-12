<main>
  <div id="container-profile">
    <div class="row">
      <div class="row">
        <div class="medium-4 columns">
          <a href="index.php?page=briefing" class="button expand">Anfrage stellen</a>
        </div>
      </div>
      <div id="profile-head" class="dark-bg">
        <div class="text-center">
          <h1>Jon Doe</h1>
          <div id="website"><a href="">www.jondoe.at</a></div>
        </div>
        <div class="row">
          <div class="medium-3 columns picture">
            <img src="../img/thumb.jpeg" alt="">
          </div>
          <div id="description" class="medium-9 columns">
            Ich arbeite seit 2004 als professioneller Webdesigner und habe in der Vergangenheit bereits zahlreiche Kundenprojekte erfolgreich abgewickelt. Ich habe mich auf dier Anforderungen und Bedürfnisse von NeugründerInnen & JungunternehmerInnen spezialisiert. Ihre Website gestalte ich entsprechend der modernsten Standards. Benutzerfreundlichkeit, Browserkompatibilität, Suchmaschinenoptimierung und weitgehende Barrierefreiheit sind für mich  stehts selbstverständlich.

          </div>
        </div>
        <ul class="text-center">
          <li><a href=""><i class="fa fa-facebook fa-fw"></i></a></li>
          <li><a href=""><i class="fa fa-google-plus fa-fw"></i></a></li>
          <li><a href=""><i class="fa fa-twitter fa-fw"></i></a></li>
          <li><a href=""><i class="fa fa-xing fa-fw"></i></a></li>
          <li><a href=""><i class="fa fa-dribbble fa-fw"></i></a></li>
        </ul>


        <div id="profile-statistics" class="text-center">
          <div class="row text-center">
            <div class="medium-3 columns">
              <h3>12</h3>
              <h5>Registrierungsdatum</h5>
            </div>
            <div class="medium-3 columns">
              <h3>60</h3>
              <h5>letzte Aktivität</h5>
            </div>
            <div class="medium-3 columns">
              <h3>8</h3>
              <h5>abgeschlossene Projekte</h5>
            </div>
            <div class="medium-3 columns">
              <h3>8</h3>
              <h5>Ø Antwortzeit</h5>
            </div>
          </div>
        </div>
      </div>

      <div id="profile-body">
        <div class="row">
          <div class="medium-3 columns" id="ratings">
            <h2>Bewertung</h2>
            <div id="points">
              <ul>
                <li class="green-bg">9</li>
                <li class="red-bg">3</li>
                <li class="orange-bg">6</li>
                <li class="yellow-bg">7</li>
                <li class="green-bg">10</li>
                <li class="yellow-bg sum-points">7</li>
              </ul>
            </div>
            <div id="categories">
              <ul>
                <li><i class="fa fa-comment fa-fw"></i> Kommunikation</li>
                <li><i class="fa fa-clock-o fa-fw"></i> Geschwindikgiet</li>
                <li><i class="fa fa-heart fa-fw"></i> Design</li>
                <li><i class="fa fa-wrench fa-fw"></i> Funktionalität</li>
                <li><i class="fa fa-question fa-fw"></i> Beratung</li>
                <li id="sum-points">Gesamt<br /> <span id="vote-count">(4 Stimmen)</span></li>
              </ul>
            </div>
          </div>

          <div class="medium-5 columns" id="qualification">
            <h2>Ausbildung</h2>
            <ul>
              <li><strong>SAE Technologie Institute, Wien</strong><br />Webdesign & Development <em>(2014)</em></li>
              <li><strong>SAE Technologie Institute, Wien</strong><br />Webdesign & Development <em>(2014)</em></li>
              <li><strong>SAE Technologie Institute, Wien</strong><br />Webdesign & Development <em>(2014)</em></li>
              <li><strong>SAE Technologie Institute, Wien</strong><br />Webdesign & Development <em>(2014)</em></li>
              <li><strong>SAE Technologie Institute, Wien</strong><br />Webdesign & Development <em>(2014)</em></li>
            </ul>
          </div>

          <div class="medium-4 columns" id="skills" >
            <h2>Kompetenzen</h2>
            <ul class="inline-list">
              <li>PHP</li>
              <li>SQL</li>
              <li>JavaScript</li>
              <li>jQuery</li>
              <li>Photoshop</li>
              <li>InDesign</li>
              <li>Illustrator</li>
            </ul>

            <h2 class="padding-top">Stärken</h2>
            <ul class="inline-list">
              <li>Organisation</li>
              <li>Pünktlichkeit</li>
              <li>Teamfähig</li>
              <li>Diszipliniert</li>
            </ul>
          </div>
        </div>
      </div>

      <div id="profile-references">

<!--     <div id="references-head" class="dark-bg text-center">
      <h2>Referenzen</h2>
    </div> -->
    <div class="row text-center">

      <?php

      for($i=1; $i<7; $i++) {

        $pictures = array('people', 'nightlife', 'nature', 'city', 'fashion', 'food');

        ?>
        <div class="medium-4 columns reference-item">
          <a href="index.php?page=profile" class="overlay">

            <div class="plus text-center">
              <h3>Projektname</h3>
              <!-- <span class="link">www.dfgfdg.at</span> -->
              <span class="time">2014</span>
              <div class="description">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. tempor invidunt ut labore et dolore magna aliquyam erat.
              </div>
<!--             <div class="tasks">
              <ul class="inline-list">
                <li>Design</li>
                <li>Konzept</li>
                <li>Programmierung</li>
                <li>Marketing</li>
                <li>Text</li>
              </ul>
            </div> -->
          </div>
        </a>
        <img src="http://lorempixel.com/300/300/<?php echo $pictures[$i] ?>/" alt="">
      </div>
      <?php } ?>

    </div>
  </div>
  <div id="profile-comments">
    <h2 class="text-center">Kundenstimmen</h2>
    <div class="row">
      <div class="medium-2 columns author text-center">
        <span class="name">Kunde</span><br />
        <span class="time">1.1.2013</span>
      </div>
      <div class="medium-10 columns comment">
        Ich arbeite seit 2004 als professioneller Webdesigner und habe in der Vergangenheit bereits zahlreiche Kundenprojekte erfolgreich abgewickelt. Ich habe mich auf dier Anforderungen und Bedürfnisse von NeugründerInnen & JungunternehmerInnen spezialisiert. Ihre Website gestalte ich entsprechend der modernsten Standards. Benutzerfreundlichkeit, Browserkompatibilität, Suchmaschinenoptimierung und weitgehende Barrierefreiheit sind für mich stehts selbstverständlich.
      </div>
    </div>

    <div class="row">
      <div class="medium-2 columns author text-center">
        <span class="name">Kunde</span><br />
        <span class="time">1.1.2013</span>
      </div>
      <div class="medium-10 columns comment">
        Lorem  Ipsum dolor sit amet
      </div>
    </div>

    <div class="row">
      <div class="medium-2 columns author text-center">
        <span class="name">Kunde</span><br />
        <span class="time">1.1.2013</span>
      </div>
      <div class="medium-10 columns comment">
        Lorem  Ipsum dolor sit amet
      </div>
    </div>

    <div class="row">
      <div class="medium-2 columns author text-center">
        <span class="name">Kunde</span><br />
        <span class="time">1.1.2013</span>
      </div>
      <div class="medium-10 columns comment">
        Lorem  Ipsum dolor sit amet
      </div>
    </div>
    <div class="row text-center">
      <a href="" class="text-center" id="more-comments"><i class="fa fa-arrow-circle-down fa-fw"></i></a>
    </div>
  </div>
</div>
</div>
</main>