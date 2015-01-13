<?php 
	
	include_once('api/util/Connect.php');

	class FileDao {


		public function __construct() {
			$db = new DB_Connect;
			$this->db = $db->db_connect(); 
		}

		public function insert($userId, $name) {
			$query = "INSERT INTO files(user_id, name) VALUES('$userId', '$name')";
			$result = mysqli_query($this->db, $query);
			
			//$row = mysqli_fetch_assoc($result);
			
			return $result;
		}

	}

?>