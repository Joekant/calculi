<?php
	function active_css_class($page_value) {
	    if($_GET['page'] == $page_value || (empty($_GET['page']) && $page_value == "home") ) {
	        return "active";
	    }
	}

	function header_navigation() {
	    return array(
	        array("home", "index.php?page=home"),
	        array("profile", "index.php?page=profile"),
	        array("briefing", "index.php?page=briefing"),
	        array("compare", "index.php?page=compare"),
	        array("login", "index.php?page=login"),
	    );
	}
?>