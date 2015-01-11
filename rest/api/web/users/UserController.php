<?php 

	class UserController {

		public function createNewUser() {
			
			

			$user = new UserDao;
			$result = $user->createNewUser();
			return
		}

		public function loadUserData() {

		}

	}


?>