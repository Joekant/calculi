<?php

class DB_Connect {
	const DB_SERVER = "localhost";
	const DB_USERNAME = "root";
	const DB_PASSWORD = "root";
	const DB_NAME = "calculi";

	public function db_connect() {
		$db_link = mysqli_connect(self::DB_SERVER,self::DB_USERNAME,self::DB_PASSWORD,self::DB_NAME) or die("error");
		$db_link->set_charset("utf8");
		return $db_link;
	}

}

?>