<?php  
	
	include_once('api/REST.php');
	include_once('api/manager/application/ApplicationManager.php');
	include_once('api/manager/briefing/BriefingManager.php');


	class ApplicationController extends REST {

		public function __construct() {
			parent::__construct();	
			parent::processApi($this);
		}
		
		public function newapplication() {
			$userId = $_SESSION['userId'];
			$req = $this->_request;
			$status = "pending";
			
			if($_SESSION['role'] == 'worker' ) {
				$manager = new ApplicationManager;
				$result = $manager->newApplication( $req['briefingId'], $userId, $req['estimatedPrice'], $req['comment'], $status );
				$this->response(array('success' => $result), 200);
			} else {
				$this->response(array('success' => 'false'), 200);
			}
		}

		public function getapplications() {
			//$userId = $_SESSION['userId'];
			$briefing = ( isset($this->_request['briefing']) ? true : false );
			$userId = 1;
			if($_SESSION['role'] == 'worker' ) {
				$manager  = new ApplicationManager;
				$result = $manager->getApplications($userId);
				
				if($briefing) {
					$briefingManager = new BriefingManager;
					$briefingResult = $briefingManager->getBriefings();
					

					$briefing = array("briefings" => $briefingResult );
					$applications = array("applications" => $result );
					
					$result = array_merge($briefing, $applications);
				}

				$this->response($result, 200);
			} else {
				$this->response(array('success' => 'false'), 200);	
			}
		}


		public function test() {
			$this->response(array('success' => 'true'), 200);
		}



	}
	
	$api = new ApplicationController;

?>
