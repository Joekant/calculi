<?php  
	
	include_once('api/REST.php');
	include_once('api/manager/user/UserManager.php');

	class UserController extends REST {

		public function __construct() {
			parent::__construct();	
			parent::processApi($this);
		}
		

		/*public function getpublicinfo() {
			$manager = new UserManager;
			$result = $manager->getUsers();
			$this->response($result,200);

		}

		public function getprivateinfo() {
			$manager = new UserManager;
			$result = $manager->getUsers();
			$this->response($result,200);

		}*/

		public function insertmeta() {

			if( isset($_SESSION['userId']) ) {
				$userId = $_SESSION['userId'];
				$req = $this->_request;
				$manager = new UserManager;
				$result = $manager->insertMeta($userId, $req['userMeta'], $req["country"], $req["state"]);
				$this->response(array('success' => $result), 200);	
			} else {
				$this->response(array('success' => 'false'), 200);
			}	
			
		}

		public function getmeta() {
			

			if( isset($_SESSION['userId']) ) {
				$userId = $_SESSION['userId'];

				$manager = new UserManager;
				$result = $manager->getMeta($userId);
				$this->response($result, 200);	
			} else {
				$this->response(array('success' => 'false'), 200);
			}

			$result = $manager->getMeta();
			$this->response($result, 200);

		}

		public function updatemeta() {
			$manager = new UserManager;
			
			$result = $manager->updateMeta($userId, $this->_request['userInfo'] );
			if($result == true) $this->response( array('success'=> 'true'), 200);
			else $this->response( array('success'=> 'false'), 200);
		}

		public function updatepublicmeta() {
			$userId = $_SESSION['userId'];
			$manager = new UserManager;
			$result = $manager->updatePublicMeta($userId, $this->_request['userInfo'], $this->_request['userCountry'] );
			$this->response( array('success'=> $result), 200);			
		}

		public function getpublicinfo() {
			$manager = new UserManager;
			$userId = $this->_request['userId'];
			$result = $manager->getPublicInfo($userId);
			$this->response($result,200);
		}

	}
	
	$api = new UserController;

?>
