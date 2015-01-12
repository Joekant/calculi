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
			$workerId = $_SESSION['userId'];
			$req = $this->_request;
			$status = "pending";
			
			if($_SESSION['role'] == 'worker' ) {
				$manager = new ApplicationManager;
				$result = $manager->newApplication( $req['briefingId'], $workerId, $req['clientId'], $req['estimatedPrice'], $req['comment'], $status );
				$this->response(array('success' => $result), 200);
			} else {
				$this->response(array('success' => 'false'), 200);
			}
		}

		public function getapplications() {
			$userId = $_SESSION['userId'];
			$briefing = ( isset($this->_request['briefing']) ? true : false );
			
			if($_SESSION['role'] == 'worker' ) {
				$manager  = new ApplicationManager;
				$result = $manager->getApplications($userId);
				if(count($result) < 1) {
					if($briefing) {
						$briefingManager = new BriefingManager;
						$briefingResult = $briefingManager->getBriefings();
						

						$briefing = array("briefings" => $briefingResult );
						$applications = array("applications" => $result );
						
						$result = array_merge($briefing, $applications);
					}
				}else {
					$briefingManager = new BriefingManager;
					$result = $briefingManager->getBriefings();
					
				}
				

				$this->response($result, 200);
			} else {
				$this->response(array('success' => 'false'), 200);	
			}
		}

		public function applicants() {

			$userId = $_SESSION['userId'];
			
			if($_SESSION['role'] == 'client' ) {
				$manager  = new ApplicationManager;
				$result = $manager->applicants($userId);
				$this->response(array($result), 200);	
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
