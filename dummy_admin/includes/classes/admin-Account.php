<?php
	class Account {

		private $errorArray;
		private $con;

		public function __construct($con) {
			$this->errorArray = array();
			$this->con = $con;
		}

		// public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
		// 	$this->validateUsername($un);
		// 	$this->validateFirstName($fn);
		// 	$this->validateLastName($ln);
		// 	$this->validateEmails($em, $em2);
		// 	$this->validatePasswords($pw, $pw2);

		// 	if(empty($this->errorArray) == true) {
		// 		//Insert into db
		// 		return $this->insertUserDetails($un, $fn, $ln, $em, $pw);
		// 	}
		// 	else {
		// 		return false;
		// 	}

		// }

		// private function insertUserDetails($un, $fn, $ln, $em, $pw) {

		// 	$encryptedPw = md5($pw);
		// 	$profilePic = "assets/images/profilePic/default-profile.png";
		// 	$date = date("Y-m-d");
		// 	$insertQuery = "INSERT INTO users values('' , '$un', '$fn', '$ln', '$em', '$encryptedPw', '$date', '$profilePic')";

		// 	$result = mysqli_query($this->con, $insertQuery);
		// 	return $result;
		// }

		public function login($un, $pw) {
			// $pw = md5($pw);
			$query = mysqli_query($this->con, "select * from tbl_admin where username = '$un' and password = '$pw'");
			if(mysqli_num_rows($query) == 1) {
				return true;
			}
			else {
				array_push($this->errorArray, Constants::$loginFailed);
				return false;
			}
		}

		public function updateUserDetails($adminId, $un, $fn, $ln, $em, $em2, $contact){
			$this->validateUsername($adminId, $un);
			$this->validateFirstName($fn);
			$this->validateLastName($ln);
			$this->validateEmails($adminId, $em, $em2);
			$this->validateContact($contact);

			if(empty($this->errorArray) == true) {
				//Insert into db
				return $this->updateAdminDetails($adminId, $un, $fn, $ln, $em, $contact);
			}
			else {
				return false;
			}
		}


		public function changePassword($un, $currentPw, $pw, $pw2) {
			$this->validateOldPasswords($un, $currentPw);
			$this->validatePasswords($pw, $pw2);


			if(empty($this->errorArray) == true) {
				//Update into db
				return $this->updatePassword($un, $pw);
			}
			else {
				return false;
			}
		}


		

		

		private function updateAdminDetails($adminId, $un, $fn, $ln, $em, $contact) {
			// `admin_id`, `fname`, `lname`, `username`, `password`, `email_id`, `contact_no`, `profile_pic`
			$updateQuery = "UPDATE tbl_admin SET username  = '$un', fname = '$fn', lname = '$ln',
                                email_id = '$em',  contact_no = '$contact'
                                where admin_id = '$adminId'";

			$result = mysqli_query($this->con, $updateQuery);
			return $result;
		}

		private function updatePassword($un, $pw){
			// $encryptedPw = md5($pw);
			$updateQuery = "Update  tbl_admin set password = '$pw' where username = '$un'";
			$result = mysqli_query($this->con, $updateQuery);
			return $result;
		}




		public function getError($error) {
			if(!in_array($error, $this->errorArray)) {
				$error = "";
			}
			return "<span class='errorMessage'>$error</span>";
		}


		

		private function validateUsername($adminId, $un) {

			if(strlen($un) > 25 || strlen($un) < 5) {
				array_push($this->errorArray, Constants::$usernameCharacters);
				return;
			}
			//TODO: check if username exists

			$checkUsernameQuery = mysqli_query($this->con, "SELECT * from tbl_admin where username='$un' AND admin_id != '$adminId' ");
			if(mysqli_num_rows($checkUsernameQuery) !=0) {
				array_push($this->errorArray, Constants::$usernameTaken);
				return;
			}
			

		}

		private function validateFirstName($fn) {
			if(strlen($fn) > 25 || strlen($fn) < 2) {
				array_push($this->errorArray, Constants::$firstNameCharacters);
				return;
			}
		}

		private function validateLastName($ln) {
			if(strlen($ln) > 25 || strlen($ln) < 2) {
				array_push($this->errorArray, Constants::$lastNameCharacters);
				return;
			}
		}

		private function validateEmails($adminId, $em, $em2) {
			if($em != $em2) {
				array_push($this->errorArray, Constants::$emailsDoNotMatch);
				return;
			}

			if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray, Constants::$emailInvalid);
				return;
			}

			// //TODO: Check that Email hasn't already been used
			// $checkEmailQuery = mysqli_query($this->con, "SELECT * from tbl_admin where email='$em' AND admin_id != '$adminId'");
			// if(mysqli_num_rows($checkEmailQuery) !=0) {
			// 	array_push($this->errorArray, Constants::$emailTaken);
			// 	return;
			// }

		}

		

		private function validateContact($contact) {

			if(strlen($contact) != 10) {
				array_push($this->errorArray, Constants::$contactLength);
				return;
			}

			if(preg_match('/[^0-9]/', $contact)) {
				array_push($this->errorArray, Constants::$ContctNotNumeric);
				return;
			}
			

		}

		private function validatePasswords($pw, $pw2) {
			
			if($pw != $pw2) {
				array_push($this->errorArray, Constants::$passwordsDoNoMatch);
				return;
			}

			if(preg_match('/[^A-Za-z0-9]/', $pw)) {
				array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
				return;
			}

			if(strlen($pw) > 30 || strlen($pw) < 5) {
				array_push($this->errorArray, Constants::$passwordCharacters);
				return;
			}

		}


		private function validateOldPasswords($un, $currentPw){


			$checkPasswordQuery = mysqli_query($this->con, "SELECT * FROM tbl_admin WHERE username='$un' AND password = '$currentPw'");

			// if(mysqli_num_rows($checkPasswordQuery) == 1) {
			// 	echo "<script> alert(' current password was valid'); </script>";
				
			// }


			if(mysqli_num_rows($checkPasswordQuery) != 1) {
				array_push($this->errorArray, Constants::$invalidCurrentPassword);
				return;
			}
		}


	}
?>