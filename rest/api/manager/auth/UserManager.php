<?php 
		
	include_once('api/dao/auth/UserDao.php');

	class AuthUserManager {

		public function addNewUser($fullName, $email, $role ) {
			$now = date("Y-m-d H:i:s");

			$dao = new AuthUserDao;
			$result = $dao->addNewUser($fullName, $email, 'inactive', $role , $now, null );
			return $result;

		}

		public function login($email, $password) {
			$dao = new AuthUserDao;
			$result = $dao->login($email, $password);
			return $result;
		}

		public function getUsers() {
			$dao = new AuthUserDao;
			$result = $dao->getUsers();
			return json_encode($result);
		}



	}

?>