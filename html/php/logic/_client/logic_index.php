<?php

// Create Navigation
function active_css_class($page_value) {
  if($_GET['page'] == $page_value || (empty($_GET['page']) && $page_value == "dashboard") ) {
    return "active";
  }
} 

function header_navigation() {
  return array(
    array("Übersicht", "index.php?page=dashboard", "dashboard"),
    array("ausschreibungen", "index.php?page=ausschreibungen", "pencil"),
    array("bewerber", "index.php?page=bewerber", "users"),
    array("aufträge", "index.php?page=auftraege", "wrench"),
    array("einstellungen", "index.php?page=einstellungen", "cogs"),
    );
}

// Include current Subpage
$page = isset($_GET['page']) ? $_GET['page'] : "dashboard";
$jsfiles = [];
$phpfiles = [];

if($page == "dashboard") {
  $content = $page;
} elseif($page == "ausschreibungen") {        
  $content = $page;
} elseif($page == "bewerber") {        
  $content = $page;
} elseif($page == "auftraege") {        
  $content = $page;
} elseif($page == "einstellungen") {        
  $content = $page;
}

include('header.php');

// Include necessary PHP - Files
if ($phpfile != "0") { 
  foreach ($phpfiles as $phpfile) {
    include("../php/logic/_worker/$phpfile"); 
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