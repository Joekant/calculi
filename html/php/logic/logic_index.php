<?php
  
  // Include current Subpage
  $page = isset($_GET['page']) ? $_GET['page'] : "home";
  $header = "1";

  if($page == "home") {
    $content = $page;
    $footerv = "normal";
  } elseif($page == "profile") {        
      $content = $page;
      $footerv = "normal";
  } elseif($page == "impressum") {        
      $content = $page;
      $footerv = "normal";
  } elseif($page == "compare") {        
      $content = $page;
      $footerv = "normal";
  } elseif($page == "briefing") {        
      $content = $page;
      $footerv = "sleek";
  } elseif($page == "login") {        
      $content = $page;
      $footer = "0";
      $header = "0";
    }
 
   // Include Header
  if ($header=="1") {
    include('content/header.php');
  }
 
   // Include Content
  include("content/sites/$content.php");
  
  // Include chosen Footer
  if ($footerv) {
    include("content/footer_$footerv.php");
  }
?>