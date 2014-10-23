<?php

  // Create Navigation
function active_css_class($page_value) {
  if($_GET['page'] == $page_value || (empty($_GET['page']) && $page_value == "home") ) {
    return "active";
  }
}

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
} elseif($page == "briefing_s") {        
  $content = $page;
} elseif($page == "register") {        
  $content = $page;
  $footerv = "0";
  $header = "0";
} elseif($page == "briefing") {        
  $content = $page;
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
  include('content/header.php');
}

// Include Content
include("content/sites/$content.php");
// Include chosen Footer
if ($footerv=="1") {
  include("content/footer_$footerv.php");
}
?>