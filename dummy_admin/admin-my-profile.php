

<!--=================================
Header -->
<?php include("admin-header.php"); ?>
<!--=================================
Header -->



<?php
    include("includes/classes/Admin-profile.php");
    $admin = new Admin($con, $userLoggedIn);

    include("includes/handlers/admin-profile-handler.php");


?>

<!--=================================
inner banner -->

<div class="header-inner admin-profile">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="jobber-user-info">
            <div class="profile-avatar">
             <?php
               $picPath = $admin->getProfilePic();
                echo" <img class='img-fluid pro-img' src='$picPath' alt='Admin'> "
             ?>
              <!-- <i class="fas fa-pencil-alt"></i> -->
            </div>
            <div class="profile-avatar-info ml-4">
               <h3 style="padding-top:40px;" class="heading-padding"><?php echo  $admin->getFullName() ; ?></h3>
            </div>

          </div>
      </div>
    </div>
  </div>
</div>

<!--=================================
inner banner -->


<br>
<?php

  // if(isset($_POST['editButton'])) {
  //   echo '<script> alert("hello")</script>';

  //   echo '<script>
  //       $(document).ready(function() {
  //         $("#basicInfoForm").hide();
  //         $("#editProfileForm").show();
  //       });
  //     </script>';
  // }
  // else {
  //   echo '<script>
  //       $(document).ready(function() {
  //         $("#basicInfoForm").show();
  //         $("#editProfileForm").hide();
  //       });
  //     </script>';
  // }

?>

<!--=================================
My Profile -->
<center>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <form class="form-row" id="basicInfoForm" action="admin-my-profile.php" method="POST">
            <div class="form-group col-md-12">
              <h4 class="heading-padding">Profile Information</h4>
            </div>

                  <div class="form-group col-md-6">
                    <label>Username: <?php echo  $admin->getUsername()  ; ?> </label>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Your Name: <?php echo  $admin->getFullName()  ; ?></label>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Email: <?php echo  $admin->getEmail()  ; ?></label>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Phone: (+91) <?php echo $admin->getContact()  ; ?> </label>
                  </div>

                  <!-- <div class="form-group col-md-6">
                    <button class="btn btn-lg btn-primary" type="submit" name="editButton">Edit</button>
                  </div> -->

          </form>
        </div>
      </div>
      </div>
    </div>
</section>
<!--=================================
My Profile -->

<!--=================================
Edit Profile -->
<section>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-2">
            <h4 class="heading-padding">Edit Profile Details</h4>
          </div>

          <!--  <div class="cover-photo-contact">
            <div class="upload-file">
              <div class="custom-file">
                <input type="file" class="custom-file-input">
                <label class="custom-file-label">Change Photo</label>
              </div>
            </div>
          </div> -->
                  <form class="form-row" id="editProfileForm" action="admin-my-profile.php" method="POST" enctype = "multipart/form-data">

                    

                    <div class="form-group col-md-6">
                      <label for="username">Username</label>
                      <?php echo $account->getError(Constants::$usernameCharacters); ?>
                      <?php echo $account->getError(Constants::$usernameTaken); ?>

                      <input class="form-control" id="username" name="username" type="text" placeholder="e.g. bartSimpson" value=" <?php echo  $admin->getUsername()  ; ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                      <label>Phone (+91)</label>
                      <?php echo $account->getError(Constants::$ContctNotNumeric); ?>
                      <?php echo $account->getError(Constants::$contactLength); ?>
                      <input type="text" class="form-control" name="contact" value= " <?php echo $admin->getContact()  ; ?>">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="firstName">First name</label>
                      <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                      <input class="form-control" id="firstName" name="firstName" type="text" placeholder="e.g. Bart" value= " <?php echo  $admin->getFirstName()  ; ?>" required>
                    </div>
                    <div class="form-group col-md-6">

                      <label for="lastName">Last name</label>
                      <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                      <input class="form-control" id="lastName" name="lastName" type="text" placeholder="e.g. Simpson" value= " <?php echo  $admin->getLastName()  ; ?>" required>
                    </div>
                    <div class="form-group col-md-6">

                      <label for="email">Email</label>
                      <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                      <?php echo $account->getError(Constants::$emailInvalid); ?>
                      <?php echo $account->getError(Constants::$emailTaken); ?>
                      <input class="form-control"  id="email" name="email" type="email" placeholder="e.g. bart@gmail.com"  value= " <?php echo  $admin->getEmail()  ; ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="email2">Confirm email</label>
                      <input class="form-control"  id="email2" name="email2" type="email" placeholder="e.g. bart@gmail.com" value= " <?php echo  $admin->getEmail()  ; ?>" required>
                    </div>
					<div class="row btn-padding">
					<div class="form-group col-md-12 select-border">
         


                        <div class="cover-photo-contact">
                          <div class="upload-file">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="image"/>
                               <input type="submit" id="updateAvatarButton" name="updateAvatarButton" class="btn login-btn" value="Update" style="margin-left:-200px;">
                            </div>
                          </div>
                        </div>
                    </div>
					
                    <button class="btn login-btn" type="submit" name="saveChangesButton" style="margin-left:-10px;">Save Changes</button>
					</div>
<!--		
                    <div class="hasAccountText">
                      <span id="hideRegister">All good? Wanna go to profile page? Click here.</span>
                    </div> -->


          </form>


        </div>
      </div>
      </div>
    </div>
  </section>
</center>
<!--=================================
Edit Profile -->



<br><br>
<!--=================================
Change Password -->
<center>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-4">
            <h4 class="heading-padding">Change Password</h4>
          </div>
          <div class="row">
            <div class="col-12">
              <form class="form-row" id="changePasswordForm" action="admin-my-profile.php" method="POST" >

                    <div class="form-group col-md-12">

                      <label>Current Password</label>
                       <?php echo $account->getError(Constants::$invalidCurrentPassword); ?>
                      <input type="password" name="currentPassword" class="form-control"   value="" placeholder="Current password" required>
                    </div>
                    <div class="form-group col-md-12">

                      <label>New Password</label>
                      <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
                      <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
                      <?php echo $account->getError(Constants::$passwordCharacters); ?>
                      <input type="password" name="password" class="form-control" value="" placeholder="New password" required>
                    </div>
                    <div class="form-group col-md-12 mb-0">
                      <label>Confirm Password</label>
                      <input type="password" name="password2" class="form-control" value="" placeholder="Confirm password" required>
                    </div>
					<div class="row btn-padding">
                    <button class="btn login-btn" type="submit" name="changePasswordButton" style="margin-top:30px;">Change Password</button>
					</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</center>
<!--=================================
Change Password -->


<!--=================================
footer -->
<?php include("admin-footer.php"); ?>
<!--=================================
footer -->
