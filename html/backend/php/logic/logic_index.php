<?php
 
  // Create Navigation
  function active_css_class($page_value) {
      if($_GET['page'] == $page_value || (empty($_GET['page']) && $page_value == "home") ) {
          return "active";
      }
  }

  function header_navigation() {
      return array(
          array("Dashboard", "index.php?page=dashboard", "dashboard"),

      );
  }


  // Include current Subpage
  $page = isset($_GET['page']) ? $_GET['page'] : "home";
  $header = "1";

  if($page == "dashboard") {
    $content = $dashboard;
}

 
  
?>