<?php

  // generate menu-item active-class
function active_css_class($page_value) {
  if($_GET['page'] == $page_value || (empty($_GET['page']) && $page_value == "home") ) {
    return "active";
  }
}

// generate menu
function header_navigation() {
  return array(
    array("start", "index.php?page=home"),
    array("Fragen", "index.php?page=faq"),
    array("registrieren", "index.php?page=register"),
    array("login", "index.php?page=login"),
    );
}

// Include current Subpage
$page = isset($_GET['page']) ? $_GET['page'] : "home";
$header = "1";
$footerv = "1";
$jsfiles = array();
$phpfiles = array();

if($page == "home") {
  $content = $page;
} elseif($page == "profile") {        
  $content = $page;
} elseif($page == "designer") {        
  $content = $page;
} elseif($page == "impress") {        
  $content = $page;
} elseif($page == "compare") {        
  $content = $page;
} elseif($page == "briefing_select") {        
  $content = $page;
} elseif($page == "briefing_s") {  
  $content = $page;
  array_push($phpfiles, "logic_briefing.php");     
} elseif($page == "register") {        
  $content = $page;
  $footerv = "0";
  $header = "0";
} elseif($page == "briefing") {  
  $content = $page;
  array_push($jsfiles, "briefing-effort-count.js", "country-state-select.js");
} elseif($page == "team") {        
  $content = $page;
} elseif($page == "press") {        
  $content = $page;
} elseif($page == "faq") {        
  $content = $page;
} elseif($page == "login") {        
  $content = $page;
  $footerv = "0";
  $header = "0";
}

// Include Header
if ($header=="1") {
  include('header.php');
}

// Include necessary PHP - Files
if ($phpfile != "0") { 
  foreach ($phpfiles as $phpfile) {
    include("../php/logic/_frontend/$phpfile"); 
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

// Include Footer
if ($footerv=="1") {
  include("footer_$footerv.php");
}
?>