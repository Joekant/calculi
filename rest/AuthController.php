<?php  
	
	include_once('api/REST.php');
	include_once('api/manager/auth/UserManager.php');

	class AuthController extends REST {

		public function __construct() {
			parent::__construct();	
			parent::processApi($this);
		}
		/*
		* @param fullName, email, role
		*/
		public function addnewuser() {
			
			$require = array('fullName', 'email', 'role');

			$request = $this->_request;

			if($request['role'] == 'client' || $request['role'] == 'worker') {

				$manager = new UserManager;	
				$result = $manager->addNewUser($request['fullName'], $request['email'], $request['role']);
				$this->response($result,200);

			} else {
				$this->response(array('success' => 'false'),200);	
			}
		}
		
		/*
		* Login -> checkdb -> set sessions
		* @param email, password
		* 
		*/
		public function login() {
			$request = $this->_request;

			$manager = new UserManager;
			$result = $manager->login($request['email'], $request['password']);
			
			if( count($result) == 0 ) {
				$this->response(array('success' => 'false'),200);
			} else {
				session_start();
				
				$_SESSION['userId'] = $result['user_id'];
				$_SESSION['role'] = $result['role'];

				$this->response(array('success' => 'true'),200);
			}
		}

		public function logout() {
			session_start();
			session_destroy();
			$this->response(array('success' => 'true'),200);
		}

		public function getusers() {
			$manager = new UserManager;
			$result = $manager->getUsers();
			$this->response($result,200);

		}

	}
	
	$api = new AuthController;

?>
