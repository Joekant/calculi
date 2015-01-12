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

		return $result;
	}

	public function newBriefing( $userId, $briefingData ) {
		$dao = new BriefingDao;

		$this->validateBriefing($briefingData);

		$now = date("Y-m-d H:i:s");
		$nextWeek = time() + (7 * 24 * 60 * 60);

		$country = "Österreich";
		$state = "Wien";
		$effort = 420;
		$status = "active";
		$expire_at = date("Y-m-d H:i:s", $nextWeek);

		$result = $dao->newBriefing($userId, $briefingData,$country, $state, $status, $effort, $expire_at, $now);

		return $result;
	}

	private function validateBriefing($briefingData) {
		$data = json_decode($briefingData, true);

		// $name =
		// $email =
		// $company =

		// if (empty($name) || ctype_alpha($name) == false || empty($company) || eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email) == false ) {
		// 	return true;
		// }
		// else {
		// 	$error = false;
		// }

		return true;

	}
}

?>