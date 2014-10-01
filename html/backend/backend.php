<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calculi - Backend</title>
  <link rel="stylesheet" href="../css/normalize.css" />
  <link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,700' rel='stylesheet' type='text/css'>
  <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../css/foundation.css" />
  <link rel="stylesheet" href="../css/app.css" />
  <script src="../js/vendor/modernizr.js"></script>
</head>
<body>

  <div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
      <nav class="tab-bar">
        <section class="left-small">
          <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
        </section>

        <section class="middle tab-bar-section">
          <h1 class="title">Dashboard</h1>
        </section>

        <section class="right-small">
          <a class="right-off-canvas-toggle menu-icon" ><span></span></a>
        </section>
      </nav>

      <aside class="left-off-canvas-menu">      
        <div id="picture">
          <img src="../img/thumb.jpeg" id="thumb" alt="profile picture">
          <div id="overlay-name">Philipp Doblhoff</div>
        </div>

        <ul class="off-canvas-list">
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Profil</a></li>
          <li><a href="#">Anfragen</a></li>
          <li><a href="#">Bewertungen</a></li>
          <li class="has-submenu"><a href="#">Einstellungen</a>
            <ul class="left-submenu">
              <li class="back"><a href="#">zurück</a></li>
              <li><a href="#">Sicherheit</a></li>
              <li><a href="#">Benachrichtigungen</a></li>
            </ul>
          </li>
        </ul>
        <img src="img/logo_invert.png" id="logo-dark" alt="">
      </aside>

      <aside class="right-off-canvas-menu">  
        <ul class="off-canvas-list">
         <li><label>Notifications</label></li>
       </ul>
     </aside>

     <section class="main-section">
      <h1 id="tour1" class="primary-color-font">Content here</h1>
      <h2 class="orange-font">Headline</h2>
      <p>
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
      </p>
      
      <table>
        <tr>
          <th>State & First</th>
          <th>State & Sixth</th>
          <th>State & Fifteenth</th>
          <th>Fifteenth & Morrison</th>
        </tr>
        <tr>
          <td>4:00</td>
          <td>4:05</td>
          <td>4:11</td>
          <td>4:19</td>
        </tr>
        <tr>
          <td>4:00</td>
          <td>4:05</td>
          <td>4:11</td>
          <td>4:19</td>
        </tr>
        <tr>
          <td>4:00</td>
          <td>4:05</td>
          <td>4:11</td>
          <td>4:19</td>
        </tr>
        <!-- ... -->
      </table>

    </section>
  </div>
</div>

<!-- Tour -->
<ol class="joyride-list" data-joyride>
  <li data-text="Los" data-options="prev_button:false; cookie_monster:true">
    <h4>Need some help?</h4>
    <p>Lets start the help-tour!</p>
  </li>
  <li data-id="tour1" data-button="Next" data-prev-text="Prev" data-options="tip_location:bottom;tip_animation:fade">
    <h4>Stop #1</h4>
    <p>Lorem Ipsum...</p>
  </li>
  <li data-id="tour2" data-button="Next" data-prev-text="Prev" data-options="tip_location:bottom;tip_animation:fade">
    <h4>Stop #2</h4>
    <p>Lorem Ipsum...</p>
  </li>
  <li data-id="tour3" data-button="Next" data-prev-text="Prev" data-options="tip_location:bottom;tip_animation:fade">
    <h4>Stop #3</h4>
    <p>Lorem Ipsum...</p>
  </li>
  <li data-button="End" data-prev-text="Prev">
    <h4>Finisch</h4>
    <p>Lorem Ipsum...</p>
  </li>
</ol>

<script src="../js/vendor/jquery.js"></script>
<script src="../js/foundation.min.js"></script>
<script>
  $(document).foundation();
  $(document).foundation('joyride', 'start');
</script>

</body>
</html>
