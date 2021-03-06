<?php

// Create Navigation
function active_css_class($page_value) {
  if($_GET['page'] == $page_value || (empty($_GET['page']) && $page_value == "dashboard") ) {
    return "active";
  }
} 

function header_navigation() {
  return array(
    array("Übersicht", "dashboard", "dashboard"),
    array("profil", "profil", "user"),
    array("ausschreibungen", "ausschreibungen", "pencil"),
    array("bewerbungen", "bewerbungen", "heart"),
    array("Aufträge", "projekte", "wrench"),
    array("einstellungen", "einstellungen", "cogs"),
    );
}

// Include current Subpage & necessary PHP & JS Files
$page = isset($_GET['page']) ? $_GET['page'] : "dashboard";
$jsfiles = array();
$phpfiles = array();

if($page == "dashboard") {
  $content = $page;
  array_push($phpfiles, "dashboard_notifications.php");
  array_push($jsfiles, "notification-ajax.js");
} elseif($page == "profil") {        
  $content = $page;
  array_push($jsfiles, "country-state-select.js");
} elseif($page == "ausschreibungen") {        
  $content = $page;
} elseif($page == "ausschreibungen_detail") {        
  $content = $page;
  array_push($jsfiles, "briefing-calculation.js");
  array_push($phpfiles, "_worker/logic_briefing.php");
} elseif($page == "bewerbungen") {        
  $content = $page;
} elseif($page == "projekte") {        
  $content = $page;
} elseif($page == "einstellungen") {        
  $content = $page;
}

include('header.php');

// Include necessary PHP - Files
if ($phpfile != "0") { 
  foreach ($phpfiles as $phpfile) {
    include("../php/logic/$phpfile"); 
  }
}

// Include Subpage
include("sites/$content.php");

// Include necessary JS - Files
if ($jsfile != "0") { 
  foreach ($jsfiles as $jsfile) {
   include("../js/$jsfile"); 
 }
}

include("footer.php");

?>




