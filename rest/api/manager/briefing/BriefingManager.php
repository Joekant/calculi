<?php 
		
	include_once('api/dao/briefing/BriefingDao.php');

	class BriefingManager {

		public function getBriefings() {
			$dao = new BriefingDao;
			$result = $dao->getBriefings();

			for($n = 0; $n < count($result); $n++) {
				$generalBriefing = json_decode($result[$n]['general_briefing'], JSON_UNESCAPED_SLASHES);
				$result[$n]['general_briefing'] = $generalBriefing;
			}
			return $result;	
		}

		public function getBriefingById($briefingId) {
			$dao = new BriefingDao;
			$result = $dao->getBriefingById($briefingId);
			
			$generalBriefing = json_decode($result['general_briefing'], JSON_UNESCAPED_SLASHES);
			$result['general_briefing'] = $generalBriefing;
			//print_r($result);
			return $result;
		}

		public function newBriefing( $userId, $briefingData ) {
			$dao = new BriefingDao;
			
			$now = date("Y-m-d H:i:s");
			$nextWeek = time() + (7 * 24 * 60 * 60);
			
			$country = "UK";
			$state = "London";
			$effort = 420;
			$status = "active";
			$expire_at = date("Y-m-d H:i:s", $nextWeek);

			$result = $dao->newBriefing($userId, $briefingData,$country, $state, $status, $effort, $expire_at, $now);

			return $result;
		}

	}

?>