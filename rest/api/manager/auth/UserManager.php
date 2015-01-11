<?php 
		
	include_once('api/dao/auth/UserDao.php');

	class UserManager {

		public function addNewUser($fullName, $email, $role ) {
			$now = date("Y-m-d H:i:s");

			$dao = new UserDao;
			$result = $dao->addNewUser($fullName, $email, 'inactive', $role , $now, null );
			return json_encode($result);

		}

		public function login($email, $password) {
			$dao = new UserDao;
			$result = $dao->login($email, $password);
			return $result;
		}

		public function getUsers() {
			$dao = new UserDao;
			$result = $dao->getUsers();
			return json_encode($result);
		}



	}

?>