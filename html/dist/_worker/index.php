<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calculi</title>

  <!-- build:css ../styles/styles.min.css -->
  <link rel="stylesheet" href="../css/normalize.css" />
  <link rel="stylesheet" href="../css/foundation.css" />
  <link rel="stylesheet" href="../css/app.css" />
  <!-- endbuild -->

  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
  <link rel="icon" href="../img/favicon.ico" type="image/x-icon">

  <!-- build:js ../scripts/scripts.min.js -->
  <script src="../js/vendor/modernizr.js"></script>
  <script src="../js/vendor/jquery.js"></script>
  <script src="../js/foundation.min.js"></script>
  <!-- endbuild -->

</head>
<body>
  <?php
      // ini_set('session.use_only_cookies', 0);
      // ini_set('session.use_trans_sid', 1);

  error_reporting(E_ERROR | E_WARNING | E_PARSE);
      // session_start();
      // include('dbconnect.php');
  include('../php/logic/_worker/logic_index.php');
  include('globalmodal.php');
  ?>

  <script>
    $(document).foundation();
  </script>
</body>
</html>