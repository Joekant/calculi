<?php

include_once('api/REST.php');
include_once('api/manager/briefing/BriefingManager.php');

class BriefingController extends REST {

	public function __construct() {
		parent::__construct();
		parent::processApi($this);
	}

	public function getbriefings() {
		$manager = new BriefingManager;
		$result = $manager->getBriefings();
		$this->response($result, 200);
	}

	public function getbriefingbyid() {

		if( $_SESSION['role'] == 'worker' ) {
			$manager = new BriefingManager;
			$result = $manager->getBriefingById($this->_request['briefingId']);
			$this->response($result, 200);
		} else {
			$this->response(array('success' => 'false'), 200);
		}
	}

	public function getbriefing() {
		if( $_SESSION['role'] == 'worker' ) {
			$manager = new BriefingManager;
			$result = $manager->getBriefing($this->_request['briefingId']);
			$this->response($result, 200);
		} else {
			$this->response(array('success' => 'false'), 200);
		}
	}

	public function newbriefing() {
		// TODO : SESSION!
		// session_start();
		// print_r($_SESSION);

		if($_SESSION['role'] == 'client' ) {
			$userId = $_SESSION['userId'];
			$request = $this->_request;

			$briefingData = $request['briefingData'];
			

			$manager = new BriefingManager;
			$result  = $manager->newBriefing($userId, $briefingData);

			if($result == 1) $this->response(array('success' => 'true'), 200);
			else $this->response(array('success' => 'false'), 200);
		} else {
			$this->response(array('success' => 'false'), 200);
		}



	}

	public function test() {
		$req = $this->_request;
		print_r($req);
	}

}

$api = new BriefingController;

?>
