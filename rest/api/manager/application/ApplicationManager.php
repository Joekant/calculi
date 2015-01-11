<?php 
		
	include_once('api/dao/application/ApplicationDao.php');

	class ApplicationManager {

		public function newApplication($briefingId, $userId, $estimatedPrice, $comment, $status) {
			$dao = new ApplicationDao;
			$result = $dao->new($briefingId, $userId, $estimatedPrice, $comment, $status);

			return $result;
		}


		public function getApplications($userId) {
			$dao = new ApplicationDao;
			$result = $dao->getApplications($userId);

			return $result;
		}

		

	}

?>