
<?php

      function sanitizeFormString($inputText) {
          $inputText = strip_tags($inputText);
          return $inputText;
      }

      function sanitizeFormNumber($inputText) {
            $inputText = strip_tags($inputText);
            $inputText = str_replace(" ", "", $inputText);
            return $inputText;
          }

      function sanitizeFormEmail($inputText) {
          $inputText = strip_tags($inputText);
          $inputText = str_replace(" ", "", $inputText);
          return $inputText;
      }

      function sanitizeFormUsername($inputText) {
          $inputText = strip_tags($inputText);
          $inputText = str_replace(" ", "", $inputText);
          return $inputText;
      }

       // INSERT INTO `registration`
      // (`Name`, `Address`, `Gender`, `Contact`, `Age`, `Email`, `User_Type`, `User_id`, `Password`, `Reg_date`, `Pro_pic`)

      if(isset($_POST['saveChangesButton'])) {

          // echo "<script> alert('saveChangesButton button was pressed'); </script>";

          $Name=sanitizeFormString($_POST['name']);
          $Email=sanitizeFormEmail($_POST['email']);
          $Contact=sanitizeFormNumber($_POST['contact']);
          $Address=sanitizeFormString($_POST['address']);
          $Gender=sanitizeFormNumber($_POST['genderRadio']);
          $Age=$_POST['age'];

          $userId = $user->getUserId();

          $wasSuccessful = $user->updateUser($userId, $Name, $Email, $Contact, $Address, $Gender, $Age);
           if($wasSuccessful){
              echo "<script> alert('Great, User Details updated sucessfully..'); </script>";
              header("Location: admin-manage-users.php");
           }
           else{
              // echo "<script> alert('sorry!, unsucessful..'); </script>";
           }

      }


      // if(isset($_POST['updateAvatarButton'])){
      //
      //     $image=$_FILES['image']['name'];
      //     $userId = $candidate->getCandidateId();
      //
      //     $wasSuccessful = $candidate->updateCandidateAvatar($userId, $image);
      //      if($wasSuccessful){
      //         echo "<script> alert('Great, Candidate Avatar updated sucessfully..'); </script>";
      //         header("Location: admin-edit-candidate.php?id=$user_id");
      //      }
      //      else{
      //         echo "<script> alert('sorry!, unsucessful..'); </script>";
      //      }
      // }


?>
