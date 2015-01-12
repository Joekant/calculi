<?php 
		
	include_once('api/dao/application/ApplicationDao.php');

	class ApplicationManager {

		public function newApplication($briefingId, $workerId, $clientId, $estimatedPrice, $comment, $status) {
			$dao = new ApplicationDao;
			$result = $dao->newApplication($briefingId, $workerId, $clientId, $estimatedPrice, $comment, $status);

			return $result;
		}


		public function getApplications($userId) {
			$dao = new ApplicationDao;
			$result = $dao->getApplications($userId);

			return $result;
		}


		public function applicants($userId) {
			$dao = new ApplicationDao;
			$result = $dao->applicants($userId);

			return $result;			
		}

		

	}

?>