<?php 
		
	include_once('api/dao/user/UserDao.php');

	class UserManager {

		
		public function insertMeta($userId, $userInfo, $country, $state) {
			$dao = new UserDao;
			
			$result = $dao->insertMeta($userId, $userInfo, $country, $state);
			return $result;
		}

		public function getMeta($userId) {
			$dao = new UserDao;

			$result = $dao->getMeta($userId);
			return $result;
		}

		public function updateMeta($userId, $userInfo) {
			$dao = new UserDao;
			$result = $dao->updateMeta($userId, $userInfo);
			return $result;
		}

		public function updatePublicMeta($userId, $userInfo, $country) {
			$dao = new UserDao;
			$result = $dao->updatePublicMeta($userId, $userInfo, $country);
			return $result;
		}

		public function getPublicInfo($userId) {
			$dao = new UserDao;
			$result = $dao->getPublicInfo($userId);
			return $result;
		}



	}

?>