<?php

// Create Navigation
function active_css_class($page_value) {
  if($_GET['page'] == $page_value || (empty($_GET['page']) && $page_value == "dashboard") ) {
    return "active";
  }
} 

function header_navigation() {
  return array(
    array("statistiken", "dashboard", "dashboard"),
    array("kunden", "clients", "user"),
    array("worker", "workers", "wrench"),
    array("ausschreibungen", "briefings", "pencil"),
    array("einstellungen", "settings", "cogs")
    );
}

// Include current Subpage
$page = isset($_GET['page']) ? $_GET['page'] : "dashboard";
$jsfiles = array();
$phpfiles = array();

if($page == "dashboard") {
  $content = $page;
} elseif($page == "briefings") {        
  $content = $page;
} elseif($page == "workers") {        
  $content = $page;
} elseif($page == "settings") {        
  $content = $page;
} elseif($page == "clients") {        
  $content = $page;
}

include('header.php');

// Include necessary PHP - Files
if ($phpfile != "0") { 
  foreach ($phpfiles as $phpfile) {
    include("../php/logic/_admin/$phpfile"); 
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




