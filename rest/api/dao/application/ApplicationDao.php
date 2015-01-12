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

		public function getApplications($userId) {
			$query = "SELECT  * FROM applications WHERE user_id = '$userId'";
			$result = mysqli_query($this->db, $query);
			//echo "hi";

			$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

			return $row;
		}	

		public function applicants($userId)	{
			$query = "SELECT applications.application_id, applications.briefing_id, applications.worker_id, applications.client_id, applications.comment, applications.estimated_price, applications.status, users_meta.public_info, users_meta.country, users_meta.state, users.full_name FROM applications  INNER JOIN users_meta ON applications.client_id = users_meta.user_id  INNER JOIN users ON users_meta.user_id = users.user_id WHERE client_id = '$userId'";
			$result = mysqli_query($this->db, $query);
			$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

			return $row;
		}


	}

?>