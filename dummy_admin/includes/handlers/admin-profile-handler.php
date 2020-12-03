<?php
	function sanitizeFormPassword($inputText) {
      $inputText = strip_tags($inputText);
      return $inputText;
    }

    function sanitizeFormUsername($inputText) {
      $inputText = strip_tags($inputText);
      $inputText = str_replace(" ", "", $inputText);
      return $inputText;
    }

    function sanitizeFormString($inputText) {
      $inputText = strip_tags($inputText);
      $inputText = str_replace(" ", "", $inputText);
      $inputText = ucfirst(strtolower($inputText));
      return $inputText;
    }

    if(isset($_POST['changePasswordButton'])) {
      //Register button was pressed
      // echo "<h1>change password pressed<h1>";
      $username = $admin->getUsername();
      // var_dump($_POST);
      $currentPassword = sanitizeFormPassword($_POST['currentPassword']);
      $password = sanitizeFormPassword($_POST['password']);
      $password2 = sanitizeFormPassword($_POST['password2']);
      
      $wasSuccessful = $account->changePassword( $username, $currentPassword, $password, $password2);
       if($wasSuccessful){
        echo "<script> alert('Great, Password changed sucessfully..'); </script>";
        // header("Location: admin-index.php");
       }
    }



    if(isset($_POST['saveChangesButton'])) {
      //saveChangesButton button was pressed
      // echo "<script> alert('saveChangesButton button was pressed..'); </script>";
      $username = sanitizeFormUsername($_POST['username']);
      $firstName = sanitizeFormString($_POST['firstName']);
      $lastName = sanitizeFormString($_POST['lastName']);
      $email = sanitizeFormString($_POST['email']);
      $email2 = sanitizeFormString($_POST['email2']);
      $contact = sanitizeFormString($_POST['contact']);


      $adminId = $admin->getUserId();
      
      $wasSuccessful = $account->updateUserDetails($adminId, $username, $firstName, $lastName, $email, $email2, $contact);
       if($wasSuccessful){
            $_SESSION['userLoggedIn'] = $username;
            echo "<script> alert('Great, User's data updated sucessfully..'); </script>";
            header("Location: admin-my-profile.php");
       }
       else{
         // echo "<script> alert('Sorry, Some error occured..'); </script>";
         // header("Location: admin-my-profile.php");
       }
      
    }

    if(isset($_POST['updateAvatarButton'])){
    
        $image=$_FILES['image']['name'];
        $adminId = $admin->getUserId();

        $wasSuccessful = $admin->updateAdminAvatar($adminId, $image);
         if($wasSuccessful){
            // echo "<script> alert('Great, You have sucessfully updated your avatar  ..'); </script>";
            header("Location: admin-my-profile.php");
         }
         else{
            echo "<script> alert('sorry!, unsucessful..'); </script>";
         }
    }

?>
