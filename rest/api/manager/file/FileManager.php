<?php 
		
	include_once('api/dao/file/FileDao.php');

	class FileManager {

		public function insert($userId, $name) {
			$dao = new FileDao;
			$result = $dao->insert($userId, $name);

			return $result;
		}

	}

?>