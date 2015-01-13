<?php  
	
	include_once('api/REST.php');
	include_once('api/manager/file/FileManager.php');

	class FileController extends REST {

		private $uploadDir = "/uploads";

		public function __construct() {
			parent::__construct();	
			parent::processApi($this);
		}

		public function savefile() {
			if($_SESSION["role"] == "worker") {
				
				$userId = $_SESSION['userId'];
				
				$upload = $this->uploadDir;
				$file = $_FILES['file'];
				$tmpName = $file["tmp_name"];
				$name = $file["name"];
	        	
	        	$destination_path = getcwd().DIRECTORY_SEPARATOR.$this->uploadDir.DIRECTORY_SEPARATOR;
				$target_path = $destination_path . basename( $name );
	    

	        	if(move_uploaded_file($tmpName, $target_path)) {

	        		$manager = new FileManager;
	        		$result = $manager->insert($userId, $name);

	        		if($result == 1) $this->response(array("success" => $result, "fileName" => $name),200);
	        		else $this->response(array("success" => $result),200);
	        	}

        	}else {
        		$this->response(array("success" => false),200);
        	}

		}

		public function test(){
			echo getcwd();
		}


		private function moveFile() {

		}
		
	}

	$api = new FileController;

?>
