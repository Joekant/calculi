<?php 
	
	include_once('api/util/Connect.php');

	class ProjectDao {


		public function __construct() {
			$db = new DB_Connect;
			$this->db = $db->db_connect(); 
		}

		public function accept($workerId, $clientId, $briefing_id, $applicationId, $status, $finishedAt) {
			$query = "INSERT INTO projects(worker_id, client_id, briefing_id, application_id, status, finished_at) VALUES('$workerId', '$clientId', '$briefing_id', '$applicationId', '$status', '$finishedAt')";
			$result = mysqli_query($this->db, $query);
			
			if($result == 1)  return array('success' => true, 'id' => mysqli_insert_id($this->db));	
			else return array( 'success' => false );	

			return $result;
		}


		public function getProjects($userId, $isWorker) {
			/*$query = "SELECT projects.briefing_id, projects.application_id, briefings.general_briefing, briefings.effort, briefings.expire_at  FROM projects INNER JOIN briefings ON briefings.briefing_id = projects.briefing_id WHERE client_id ='$userId'";*/
			
			if($isWorker == "false") {
				$query = "SELECT projects.briefing_id, projects.application_id, projects.status, briefings.general_briefing, briefings.effort, briefings.expire_at, applications.estimated_price FROM projects INNER JOIN briefings ON briefings.briefing_id = projects.briefing_id INNER JOIN applications ON applications.application_id = projects.application_id WHERE projects.client_id ='$userId'";
			} else {
				
				$query = "SELECT projects.briefing_id, projects.application_id, projects.status, briefings.general_briefing, briefings.effort, briefings.expire_at, applications.estimated_price FROM projects INNER JOIN briefings ON briefings.briefing_id = projects.briefing_id INNER JOIN applications ON applications.application_id = projects.application_id WHERE projects.worker_id ='$userId'";
			}
			
			$result = mysqli_query($this->db, $query) or die( mysqli_error($this->db));
			$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

			return $row;

		}	





	}

?>