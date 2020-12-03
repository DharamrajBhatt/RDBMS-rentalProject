<?php
    class User {

        private $errorArray;
        private $con;


        private $Name;
        private $Address;
        private $Gender;
        private $Contact;
        private $Age;
        private $Email;
        private $User_Type;
        private $User_id;
        private $Password;
        private $Reg_date;
        private $Pro_pic;

        // INSERT INTO `registration`
        // (`Name`, `Address`, `Gender`, `Contact`, `Age`, `Email`, `User_Type`, `User_id`, `Password`, `Reg_date`, `Pro_pic`)

        public function __construct($con, $User_id) {
            $this->con = $con;
            $this->errorArray = array();

            $this->User_id = $User_id;

            $query = mysqli_query($this->con, "SELECT * FROM registration WHERE User_id='$this->User_id'");
            $userDetail = mysqli_fetch_array($query);

            // $this->user_id = $userDetail['user_id'];
            $this->Name = $userDetail['Name'];
            // $this->profile_pic = $userDetail['profile_pic'];
            $this->Gender = $userDetail['Gender'];
            $this->Contact = $userDetail['Contact'];
            $this->Age = $userDetail['Age'];
            $this->Email = $userDetail['Email'];
            $this->User_Type = $userDetail['User_Type'];
            $this->User_id = $userDetail['User_id'];
            $this->Address = $userDetail['Address'];

        }


        public function getUserId() {
            return $this->User_id;
        }
        public function getUserType() {
            return $this->User_Type;
        }

        public function getUserName() {
            return $this->Name;
        }

        public function getEmail() {
            return $this->Email;
        }

        public function getGender() {
            return $this->Gender;
        }
        public function getAge() {
            return $this->Age;
        }

        public function getContact() {
            return $this->Contact;
        }


        public function getAdress() {
            return $this->Address;
        }

        public function getState() {
            return $this->state;
        }

        public function getCity() {
            return $this->city;
        }

        //$userId, $Name, $Email, $Contact, $Address, $Gender, $Age

        public function updateUser($userId, $Name, $Email, $Contact, $Address, $Gender, $Age) {
            $this->validateName($Name);
            $this->validateEmail($Email);
            $this->validateContact($Contact);
            $this->validateAge($Age);

            if(empty($this->errorArray) == true) {
                //Insert into db
               return $this->updateUserDetails($userId, $Name, $Email, $Contact, $Address, $Gender, $Age);
            }
            else {
                return false;
            }

        }



        private function updateUserDetails($userId, $Name, $Email, $Contact, $Address, $Gender, $Age){
          // INSERT INTO `registration`
          // (`Name`, `Address`, `Gender`, `Contact`, `Age`, `Email`, `User_Type`, `User_id`, `Password`, `Reg_date`, `Pro_pic`)

            $updateQuery = "UPDATE  registration set  Name = '$Name', Email = '$Email',
                                 Address = '$Address', Gender = '$Gender', Age = '$Age',
                                Contact = '$Contact'
                                where User_id = '$userId'";
            $result = mysqli_query($this->con, $updateQuery);

            return $result;

        }


        //For printing the errors
        public function getError($error) {
            if(!in_array($error, $this->errorArray)) {
                $error = "";
            }
            return "<span class='errorMessage'>$error</span>";
        }




        private function validateEmail($em) {
            if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorArray, Constants::$emailInvalid);
                return;
            }

        }

        private function validateName($Name) {
          if(strlen($Name) < 3 ||  strlen($Name) > 32) {
              array_push($this->errorArray, Constants::$NameLength);
              return;
          }
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

        private function validateAge($Age) {

            if($Age < 18 ||  $Age > 100) {
                array_push($this->errorArray, Constants::$AgeLength);
                return;
            }

            if(preg_match('/[^0-9]/', $Age)) {
                array_push($this->errorArray, Constants::$AgeNotNumeric);
                return;
            }

        }



    }
?>
