<?php  
	
	include_once('api/REST.php');
	include_once('api/manager/project/ProjectManager.php');
	include_once('api/manager/application/ApplicationManager.php');
	
	class ProjectController extends REST {

		public function __construct() {
			parent::__construct();	
			parent::processApi($this);
		}

		public function getprojects() {
			$userId = $_SESSION['userId'];
			$role = $_SESSION['role'];

			$manager = new ProjectManager;
			
			if($role == 'worker') $result = $manager->getProjects($userId, "true" );
			else $result = $manager->getProjects($userId, "false" );

			$this->response($result,200);

		}


		public function accept() {

			$clientId = $_SESSION['userId'];
			$req = $this->_request;
			$status = "working";
			if($_SESSION['role'] == 'client') {

				$manager = new ProjectManager;
				$result = $manager->accept($req['workerId'], $clientId, $req['briefingId'], $req['applicationId'], $status, null );

				$appManager = new ApplicationManager;
				$appResult = $appManager->changeStatusToAccept($req['applicationId'], $req['briefingId']);
				$this->response($result,200);

			}

		}

		public function decline() {

		}

		
	}

	$api = new ProjectController;

?>
