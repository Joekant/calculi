<?php  
	
	include_once('REST.php');

	class API extends REST {


		const DB_SERVER = "localhost";
		const DB_USERNAME = "root";
		const DB_PASSWORD = "";
		const DB_NAME = "rest_test";

		public function __construct() {
			parent::__construct();				

		}

		//@POST
		public function getNumber($data) {
			return $data;
		}

		public function processApi(){
			$func = strtolower(trim(str_replace("/","",$_REQUEST['rquest'])));
			echo $func;
			if((int)method_exists($this,$func) > 0)
				$this->$func();
			else
				$this->response('',404);				// If the method not exist with in this class, response would be "Page not found".
		}
	}
	
	$api = new API;
	$api->processApi();
?>
