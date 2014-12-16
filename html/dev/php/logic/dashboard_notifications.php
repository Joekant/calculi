  <?php

  if ($_SERVER["HTTP_X_REQUESTED_WITH"] == 'XMLHttpRequest') {

    $IdToDelete = $_POST['send'];

    include ('../db_connect.php');
    $sql = "UPDATE notifications SET status='1' WHERE notification_id=$IdToDelete";
    mysqli_query($db, $sql);
  }

  else {
    $notification_result = mysqli_query($db, "SELECT * FROM notifications WHERE user_id = 1 AND status = 0 LIMIT 5");
    $num_rows = mysqli_num_rows($notification_result);
  }

  ?>