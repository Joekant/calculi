<?php 
	
	include_once('api/util/Connect.php');

	class ApplicationDao {


		public function __construct() {
			$db = new DB_Connect;
			$this->db = $db->db_connect(); 
		}

		public function newApplication($briefingId, $userId, $estimatedPrice, $comment, $stauts) {
			$query = "INSERT INTO applications(briefing_id, user_id, estimated_price, comment, status) VALUES('$briefingId', '$userId', '$estimatedPrice', '$comment', '$stauts')";

			$result = mysqli_query($this->db, $query);

			return $result;
		}

		


	}

?>