<!--=================================
header -->
<?php include("admin-header.php"); ?>
<!--=================================
header -->


<?php
    include("includes/classes/admin-User.php");

    if(isset($_GET['id'])) {
      $User_id = $_GET['id'];
    }
    else {
      header("Location: admin-manage-users.php");
    }

    $user = new User($con, $User_id);

    include("includes/handlers/admin-user-handler.php");

?>


<!--=================================
edit user -->
    <!--=================================
    tab -->
    <section class="space-ptb bg-light">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-12">
            <div class="section-title text-center">
              <h2 class="text-primary">Edit User</h2>
            </div>
          </div>

          <div class="col-md-8">
            <div class=" justify-content-center">
              <ul class="nav nav-tabs nav-tabs-03 justify-content-center d-sm-flex d-block text-center" id="myTab" role="tablist">
                <li class="flex-fill">
                  <a class="nav-item active" href="#" id="user-detail-tab"  role="tab" aria-controls="user-detail" aria-selected="false">
                    <div class="feature-info-icon mb-3">
                      <i class="flaticon-suitcase"></i>
                    </div>
                    <!-- <span>user Detail</span> -->
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    tab ==============================-->





    <section class="space-ptb">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="user-dashboard-info-box">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <!-- // INSERT INTO `registration`
                    // (`Name`, `Address`, `Gender`, `Contact`, `Age`, `Email`, `User_Type`, `User_id`, `Password`, `Reg_date`, `Pro_pic`) -->
                      <form class="form-row" id="edituserForm" name="edituserForm" method="post"
                            action='<?php echo "admin-edit-user.php?id=$User_id" ; ?>'  enctype = "multipart/form-data">

                          <div class="form-group col-md-6 select-border">
                              <label><h4>User Id:  <?php echo $user->getUserId() ; ?></h4></label>
                          </div>
                          <div class="form-group col-md-6 select-border">
                              <label><h4>User Type: <?php echo $user->getUserType() ; ?></h4></label>
                          </div>

                          <div class="form-group col-md-12 select-border">
                              <label>Name*</label>
                              <?php echo $user->getError(Constants::$NameLength); ?>
                              <input type="text" id="title" name="name" id="name" class="form-control"
                                  value="<?php echo $user->getUserName() ; ?>" placeholder="Enter a name"   required>
                          </div>


                          <div class="form-group col-md-6 select-border">
                            <label>Email Address *</label>
                            <?php echo $user->getError(Constants::$emailInvalid); ?>
                            <input type="email"  class="form-control" id="email" name="email" placeholder="Enter Email Address "
                            required value="<?php echo  $user->getEmail() ; ?>" >
                          </div>


                         <div class="form-group col-md-6">
                          <label>Contact (+91)</label>
                          <?php echo $user->getError(Constants::$ContctNotNumeric); ?>
                          <?php echo $user->getError(Constants::$contactLength); ?>
                          <input type="text" class="form-control" name="contact" required value= "<?php echo $user->getContact()  ; ?>">
                        </div>

                        <div class="form-group col-md-6">
                         <label>Age* </label>
                         <?php echo $user->getError(Constants::$AgeNotNumeric); ?>
                         <?php echo $user->getError(Constants::$AgeLength); ?>
                         <input type="text" class="form-control" name="age" required value= "<?php echo $user->getAge()  ; ?>">
                       </div>


                        <div class="form-group col-md-6" >
                              <label class="d-block mb-3">Gender</label>
                                <?php $gender = $user->getGender() ; ?>
                                <div class="custom-control custom-radio d-inline">
                                  <input type="radio" name="genderRadio" id="genderRadio1" class="custom-control-input" value="male" <?php echo(($gender == "male")?'checked="checked"':''); ?> >
                                  <label class="custom-control-label" for="genderRadio1">Male</label>
                                </div>
                                <div class="custom-control custom-radio d-inline ml-3">
                                  <input type="radio" name="genderRadio" id="genderRadio2"  class="custom-control-input" value="female" <?php echo(($gender == "female")?'checked="checked"':''); ?> >
                                  <label class="custom-control-label" for="genderRadio2">Female</label>
                                </div>
                                <div class="custom-control custom-radio d-inline ml-3">
                                  <input type="radio" name="genderRadio" id="genderRadio3"  class="custom-control-input" value="other" <?php echo(($gender == "other")?'checked="checked"':''); ?> >
                                  <label class="custom-control-label" for="genderRadio3">Other</label>
                                </div>
                        </div>

                          <!-- <div class="col-12" >
                            <h5 style="margin-top: 22px; margin-bottom: 5px;">Address/ Location</h5>
                          </div> -->


                          <div class="form-group col-md-12">
                            <label>Address *</label>
                            <textarea required class="form-control" rows="2" id="address" name="address"><?php echo $user->getAdress() ; ?>
                            </textarea>
                          </div>

                          <div class="col-md-12">
                            <input type="submit" id="saveChangesButton" name="saveChangesButton" class="btn btn-primary" value="Save Changes">
                          </div>

                      </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </section>
<!--=================================
edit user -->
<!--=================================

footer -->
<?php include("admin-footer.php"); ?>
<!--=================================
footer -->
