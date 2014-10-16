<?php

// Create Navigation
function active_css_class($page_value) {
  if($_GET['page'] == $page_value || (empty($_GET['page']) && $page_value == "dashboard") ) {
    return "active";
  }
} 

function header_navigation() {
  return array(
    array("dashboard", "index.php?page=dashboard", "dashboard"),
    array("profil", "index.php?page=profil", "user"),
    array("ausschreibungen", "index.php?page=ausschreibungen", "pencil"),
    array("bewerbungen", "index.php?page=bewerbungen", "heart"),
    array("projekte", "index.php?page=projekte", "code"),
    array("einstellungen", "index.php?page=einstellungen", "wrench"),
    );
}

  // Include current Subpage
$page = isset($_GET['page']) ? $_GET['page'] : "dashboard";

foreach(header_navigation() as $navigation_item) {
  if($page == $navigation_item[0]) {
    $content = $page;
  }
}

include('content/header.php');
include("content/sites/$content.php");
include("content/footer.php");

?>




