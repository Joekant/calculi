<?php  
	
	include_once('api/REST.php');
	include_once('api/util/Connect.php');
	include_once('api/dao/auth/UserDao.php');

	class API extends REST {


		const DB_SERVER = "localhost";
		const DB_USERNAME = "root";
		const DB_PASSWORD = "";
		const DB_NAME = "calculi";

		public function __construct() {
			parent::__construct();				
			
		}

		public function model() {
			echo "model";
			/*$dao = new UserDao;
			$dao->createNewUser();*/
		}

		private function dbConnect(){
			$this->db = mysqli_connect(self::DB_SERVER,self::DB_USERNAME,self::DB_PASSWORD, self::DB_NAME) or die("error");
			/*if($this->db)
				mysql_select_db(self::DB_NAME,$this->db);*/
		}

		/*public function user() {
			echo "YES, I'M USER";
		} */



		public function processApi2(){

			if( isset($_REQUEST['request']) ) {

				//$func = strtolower(trim(str_replace("/",",",$_REQUEST['request'])));	
				
				$func = explode("/",$_REQUEST['request']);
				print_r($func);
				
				/*if(count($func) <= 1  ) $this->response('Client error',403);
				
				if((int)method_exists($this,$func[0]) > 0)
					$this->$func[0]($func[1]);
				else
					$this->response('Not Found',404);*/
			}
		}
	}

	
	$api = new API;
	//$api->processApi();
?>
