<?php

include_once('api/util/Connect.php');

class UserDao {


	const TOKEN_SALT = "gh-0sX-hEl-fT+~6CS<d1R5]6p,0c6rq[Gt|9C}:+4dDHu>5v^t50wFD_:=rV6ae";
	const PASS_SALT = "w-Z06f.L-?vLfXX6P{r`XnkY^v&6Fz^4QjZ&BD[ 9{[|+I|@=I)aXb+M#(2tb.jv";

	public function __construct() {
		$db = new DB_Connect;
		$this->db = $db->db_connect();
	}

		/*
		* Add new User
		* @return success = true / false
		*/

		public function addNewUser($fullName, $email, $status, $role, $created_at, $last_active) {
			//initialize result
			$result = 0;
			$generatedPass = $this->generatePassword();

			$password = sha1( $email . $generatedPass . self::PASS_SALT );

			$token = sha1($created_at . self::TOKEN_SALT . $fullName);

			$query = "INSERT INTO users(full_name, email, password, token, status, role, created_at, last_active) VALUES('$fullName', '$email', '$password', '$token', '$status', '$role', '$created_at', '$last_active')";

			try {

				$result = mysqli_query($this->db, $query);

				//print_r($generatedPass);

				if($result == 1)  return array('success' => $generatedPass);
				else return array( 'success' => false );

				if($result == 1)  return array('success' => $generatedPass);
				else return array( 'success' => false );

			} catch(Exception $e) {
				echo $e->getMessage();
			}

		}

		public function login($email, $password) {

			$query = "SELECT user_id, email, password, role FROM users WHERE email = '$email'";
			$result = mysqli_query($this->db, $query) or die( mysqli_error($this->db));

			if($result->num_rows  == 0) return array(); //If the email doesn't exist

			else {
				$row = mysqli_fetch_assoc($result);
				$enteredPass = sha1($email . $password . self::PASS_SALT);

				if( $enteredPass == $row['password']) return $row; //If pass is correct
				else return array(); // Pass not correct

			}

		}

		/*
		*
		* @return list of users
		*/
		public function getUsers() {

			//echo "im not the contr";
			$result = mysqli_query($this->db, 'SELECT * FROM users') or die( mysqli_error($this->db) );
			while ($row[] = mysqli_fetch_assoc($result) );

			return $row;
		}

		/*
		* Generates 8 length password. We use this only for the user registration process
		* @return String
		*/

		private function generatePassword($length = 8) {
			$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
			$count = mb_strlen($chars);

			for ($i = 0, $result = ''; $i < $length; $i++) {
				$index = rand(0, $count - 1);
				$result .= mb_substr($chars, $index, 1);
			}

			return $result;
		}

	}

	?>