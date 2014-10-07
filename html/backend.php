<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calculi - Backend</title>
  <link rel="stylesheet" href="../css/normalize.css" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,700' rel='stylesheet' type='text/css'>
  <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../css/foundation.css" />
  <link rel="stylesheet" href="../css/app.css" />
  <script src="../js/vendor/modernizr.js"></script>
</head>
<body>

<!--   <div class="sticky" id="backend-nav" >
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="#">Philipp Doblhoff</a></h1>
        </li>
        
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
        <ul class="right">
          <li class="has-dropdown">
            <a href="#">Account</a>
            <ul class="dropdown">
            <li><a href="#">Einstellungen</a></li>
              <li><a href="#">Sicherheit</a></li>
              <li><a href="#">Benachrichtigungen</a></li>
              <li><a href="#">Abmelden</a></li>
            </ul>
          </li>
        </ul>
      </section>
    </nav>
  </div> -->

  <div class="icon-bar large-horizontal six-up">
    <a class="item" id="firstStop">
      <i class="fa fa-dashboard fa-fw"></i>
      <label>Dashboard</label>
    </a>
    <a class="item" id="1Stop">
      <i class="fa fa-user fa-fw"></i>
      <label>Profil</label>
    </a>
   <a class="item" id="2Stop">
    <i class="fa fa-pencil fa-fw"></i>
    <label>Ausschreibungen</label>
  </a>
   <a class="item" id="3Stop">
    <i class="fa fa-code fa-fw"></i>
    <label>Projekte</label>
  </a>
    <a class="item" id="4Stop">
     <i class="fa fa-bell-o fa-fw"></i>
     <label>Benachrichtigungen</label>
   </a>
    <a class="item" id="5Stop">
     <i class="fa fa-wrench fa-fw"></i>
     <label>Einstellungen</label>
   </a>   
</div>

<div class="main-section">
  <h1>Dashboard</h1>

</div>


<!-- Tour -->
<ol class="joyride-list" data-joyride>
  <li data-text="Los" data-options="prev_button:false; cookie_monster:true">
    <h4>Brauchst du Hilfe?</h4>
    <p>Entdecke Calculi in dieser kurzen Tour</p>
  </li>
  <li data-id="1Stop" data-button="weiter" data-prev-text="zurück" data-options="tip_location:bottom;tip_animation:fade">
    <h4>Das Dashboard</h4>
    <p>Lorem Ipsum...</p>
  </li>
  <li data-id="2Stop" data-button="weiter" data-prev-text="zurück" data-options="tip_location:bottom;tip_animation:fade">
    <h4>Dein Profil</h4>
    <p>Lorem Ipsum...</p>
  </li>
  <li data-id="3Stop" data-button="weiter" data-prev-text="zurück" data-options="tip_location:bottom;tip_animation:fade">
    <h4>Ausschreibungen</h4>
    <p>Lorem Ipsum...</p>
  </li>
  <li data-button="End" data-prev-text="zurück">
    <h4>Fertig</h4>
    <p>Lorem Ipsum...</p>
  </li>
</ol>

<script src="../js/vendor/jquery.js"></script>
<script src="../js/foundation.min.js"></script>
<script>
  $(document).foundation();
  // $(document).foundation('joyride', 'start');
</script>

</body>
</html>
