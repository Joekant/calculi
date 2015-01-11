<?php 
	
	include_once('api/util/Connect.php');

	class UserDao {


		public function __construct() {
			$db = new DB_Connect;
			$this->db = $db->db_connect(); 
		}

		/*
		* 
		* @return json object with the whole user metadata
		*/
		public function getMeta($userId) {
			//echo "im not the contr";
			$result = mysqli_query($this->db, "SELECT * FROM users_meta WHERE user_id = '$userId'") or die( mysqli_error($this->db) );
			$row = mysqli_fetch_assoc($result);
			
			$public_info = array("public_info" => json_decode($row['public_info'],true) );
			$private_info = array( "private_info" => json_decode($row['private_info'],true) );
			
			$info = array_merge($public_info, $private_info);
			
			return json_encode($info, JSON_UNESCAPED_SLASHES);
		}


		public function getPublicInfo($userId) {
			$query = "SELECT public_info FROM users_meta WHERE user_id = '$userId'";
			$result = mysqli_query($this->db, $query);
			$row = mysqli_fetch_row($result);
			return json_encode($row, JSON_UNESCAPED_SLASHES);;

		}

		/*
		* Update user's metadata
		* @param userId
		* @return true if success, false if ...
		*/

		public function insertMeta($userId, $userInfo, $country, $state) {
			$info = json_decode($userInfo, true);
			$publicInfo = json_encode($info['public_info'],JSON_UNESCAPED_SLASHES);
			$privateInfo = json_encode($info['private_info'],JSON_UNESCAPED_SLASHES);
			
			
			$query = "INSERT INTO users_meta(user_id, public_info, private_info, country, state) VALUES('$userId', '$publicInfo', '$privateInfo', '$country', '$state')";
			$result = mysqli_query($this->db, $query);
			
			return $result;
		}

		public function updateMeta($userId = 1, $userInfo) {
			$info = json_decode($userInfo);
			$public_info = json_encode($info->public_info,JSON_UNESCAPED_SLASHES);
			$private_info = json_encode($info->private_info,JSON_UNESCAPED_SLASHES);
			
			
			$query = "UPDATE users_meta SET public_info='$public_info', private_info = '$private_info' WHERE user_id = '$userId'";
			$result = mysqli_query($this->db, $query);
			
			return $result;

		}


	}

?>