<!doctype html>
<html class="no-js" lang="en" ng-app="Core">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calculi</title>

  <!-- build:css ../styles/styles.min.css -->
  <link rel="stylesheet" href="../css/normalize.css" />
  <link rel="stylesheet" href="../css/foundation.css" />
  <link rel="stylesheet" href="../css/app.css" />
  <!-- endbuild -->

  <!-- build:js ../scripts/scripts_top.min.js -->
  <script src="../js/vendor/modernizr.js"></script>
  <script src="../js/vendor/jquery.js"></script>
  <!-- endbuild -->

  <!-- Angular Core Files -->
  <script src="../js/vendor/angular/angular.min.js"></script>
  <script src="../js/vendor/angular/angular-route.min.js"></script>

  <!-- App files -->
  <script src="../js/core/core.js"></script>
  <script src="../js/core/services/services.js"></script>
  <script src="../js/core/directives/directives.js"></script>

  <!-- App Controllers -->
  <script src="../js/core/controllers/ProfileCtrl.js"></script>  
  <script src="../js/core/controllers/BriefingsCtrl.js"></script>  
  <script src="../js/core/controllers/ApplicationsCtrl.js"></script>  


  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
  <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>

  <header class="show-for-large-up">
    <div navmenu class="icon-bar dark-bg large-horizontal five-up">

      <a  ng-repeat="item in items" href="#{{item.url}}" class="item">
        <i class="fa fa-{{item.class}} fa-fw"></i>
        <label>{{item.title}}</label>
      </a>

    </div>
  </header>

  <header  class="show-for-small-only-up hide-for-large-up">
    <nav class="top-bar" id="frontpage-topbar" data-topbar="" role="navigation">
      <ul class="title-area">
        <li class="name"></li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>
      <section  class="top-bar-section">
        <ul navmenu class="right">
          <li ng-repeat = "item in items"><a href="#">{{item.title}}</a></li>
          <!-- <li class=""><a href="#">{{item.title}}</a></li>
          <li class=""><a href="#">Profil</a></li>
          <li class=""><a href="#">Ausschfeibungen</a></li>
          <li class=""><a href="#">Bewerbungen</a></li>
          <li class=""><a href="#">Aufträge</a></li>
          <li class=""><a href="#">Einstellungen</a></li> -->
        </ul>
      </section>
    </nav>
  </header>

  <div ng-view></div>


  <footer class="be-footer">  
    <ul>
      <li><a href="#" data-reveal-id="helpmodal"><span data-tooltip aria-haspopup="true" class="has-tip" title="Hilfestellungen"><i class="fa fa-question fa-fw"></i></span></a></li>
      <li><a href="#" data-reveal-id="feedbackmodal"><span data-tooltip aria-haspopup="true" class="has-tip" title="Feedback"><i class="fa fa-comment fa-fw"></i></span></a></li>

      <li><a href="#"  data-dropdown="drop1" aria-controls="drop1" ><span data-tooltip aria-haspopup="true" class="has-tip" title="Abmelden"><i class="fa fa-lock fa-fw"></i></span></a></li>
      <ul id="drop1" data-dropdown-content class="f-dropdown" aria-hidden="true" tabindex="-1">
        <li><a href="../_frontend">Abmelden</a></li>
      </ul> 

    </ul>
    <div class="love">
      gemacht mit <i class="fa fa-heart-o fa-fw"></i> an der SAE
    </div>
  </footer>

  <!-- build:js ../scripts/scripts_bottom.min.js -->
  <script src="../js/foundation.min.js"></script>
  <script src="../js/vendor/fastclick.js"></script>
  <script src="../js/vendor/placeholder.js"></script>
  <script src="../js/vendor/jquery.coockie.js"></script>
  <!-- endbuild -->

  <script>
    $(document).foundation();
  </script>
</body>
</html>