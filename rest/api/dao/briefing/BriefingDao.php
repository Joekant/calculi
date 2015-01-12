<?php 
	
	include_once('api/util/Connect.php');

	class BriefingDao {


		public function __construct() {
			$db = new DB_Connect;
			$this->db = $db->db_connect(); 
		}

		public function getBriefings($assoc = false) {
			$query = "SELECT * FROM briefings";
			$result = mysqli_query($this->db, $query);
			if(!$assoc) {
				$row = mysqli_fetch_all($result, MYSQLI_ASSOC);	
			} else {

			}
			

			return $row;
		}


		/*
		* Update user's metadata
		* @param userId
		* @return true if success, false if ...
		*/
		public function getBriefingById($briefingId) {
			
			$query = "SELECT * FROM briefings WHERE briefing_id = $briefingId ";
			$result = mysqli_query($this->db, $query);
			

			$row = mysqli_fetch_assoc($result);
			
			return $row;

		}

		public function newBriefing($userId, $briefingData, $country, $state, $status, $effort, $expire_at, $created_at) {
			//$data = json_decode($briefingData);
			//print_r($data);

			$query = "INSERT INTO briefings(user_id, general_briefing, country, state, status, effort, expire_at) VALUES('$userId', '$briefingData','$country' , '$state', '$status', '$effort', '$expire_at' )" or die( mysqli_error($this->db));
			$result = mysqli_query($this->db, $query);
			//print_r($result);
			return $result;

		}	


	}

?>