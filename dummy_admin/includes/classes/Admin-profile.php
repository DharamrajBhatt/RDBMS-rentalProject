<?php
	class Admin {

		private $con;
		// private $errorArray;

		private $admin_id;
		private $fname;
		private $lname;
		private $username;
		private $password;
		private $email_id;
		private $contact_no;
		private $profile_pic;


		// `admin_id`, `fname`, `lname`, `username`, `password`, `email_id`, `contact_no`, `profile_pic`

		public function __construct($con, $username) {
			// $this->errorArray = array();
			$this->con = $con;
			$this->username = $username;

			$query = mysqli_query($this->con, "SELECT * FROM tbl_admin WHERE username='$this->username'");
			$tbl_admin = mysqli_fetch_array($query);

			$this->admin_id = $tbl_admin['admin_id'];
			$this->fname = $tbl_admin['fname'];
			$this->lname = $tbl_admin['lname'];
			$this->password = $tbl_admin['password'];
			$this->email_id = $tbl_admin['email_id'];
			$this->contact_no = $tbl_admin['contact_no'];
			$this->profile_pic = $tbl_admin['profile_pic'];


		}



		public function getUserId() {
			return $this->admin_id;
		}

		public function getUsername() {
			return $this->username;
		}

		public function getProfilePic() {
			return $this->profile_pic;
		}

		public function getFirstName() {
			return $this->fname;
		}

		public function getLastName() {
			return $this->lname;
		}

		public function getFullName() {
			return $this->fname ." " .$this->lname;
		}

		public function getEmail() {
			return $this->email_id;
		}

		public function getContact() {
			return $this->contact_no;
		}



		public function updateAdminAvatar($userId, $image){
            $fname = $this->fname;
            $file_ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            $image = "images/avatar/admin/avatar-" . $userId ."(". $fname . ")." . $file_ext;

            $updateQuery = "UPDATE  tbl_admin set   profile_pic = '$image' where admin_id = '$userId'";
            $result = mysqli_query($this->con, $updateQuery);

            if($result){
               // Upload file
               move_uploaded_file($_FILES['image']['tmp_name'], $image);
            }

            return $result;
       }

	}
?>