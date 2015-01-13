<?php 
		
	include_once('api/dao/project/ProjectDao.php');

	class ProjectManager {

		public function accept($workerId, $clientId, $briefing_id, $applicationId, $status, $finishedAt) {
			$dao = new ProjectDao;
			$result = $dao->accept($workerId, $clientId, $briefing_id, $applicationId, $status, $finishedAt);

			return $result;
		}


		public function getProjects( $userId, $isWorker ) {
			
			$dao = new ProjectDao;
			$result = $dao->getProjects($userId, $isWorker);

			for($n = 0; $n < count($result); $n++) {
		
				$generalBriefing = json_decode($result[$n]['general_briefing'], JSON_UNESCAPED_SLASHES);
			
				$result[$n]['general_briefing'] = $generalBriefing;


			}

			return $result;

		}			

	}

?>