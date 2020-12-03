<?php
session_start();
$img=$_SESSION['pic'];
if(empty($_SESSION['uid']) || $_SESSION['uid']== '')
{
 //header("Location: error.php");
  echo '<script>window.location.href="error.html"</script>';
  die();
}
?>
<html lang="en">
<head>

   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>RentiMent || The home you deserve</title>
   <link rel="icon" href="img/logo2.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- animate CSS -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- owl carousel CSS -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- themify CSS -->
   <link rel="stylesheet" href="css/themify-icons.css">
   <!-- flaticon CSS -->
   <link rel="stylesheet" href="css/flaticon.css">
   <!-- magnific-popup CSS -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <!-- font awesome CSS -->
   <link rel="stylesheet" href="fontawesome/css/all.min.css">
    
   
    <!-- style CSS -->
   <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <link rel="stylesheet" href="style_rentiment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
       <style>
          .info
           {
               color: #bd9c50;
               font-weight: 600;
               font-size: 16px;
               font-family: sans-serif;
               
           }
           </style>
       
     
</head>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
<body>
   <!--::menu part start::-->
   <header class="main_menu home_menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="index.php"> <img src="img/logo2.png" style="width:60%" alt="logo"> </a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
							aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse main-menu-item" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item active">
									<a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">About Us</a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="#">Contact us</a>
								</li>
                                <li>
                                    <div id="google_translate_element" ></div>
                                    <script type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                    }
                                </script>
                                </li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
   <!--::menu part end::-->

    
   
   <!--::Admin Dashboard part start::-->
    
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-12">
                
                    <!-- header area start  -->
                    
                    <div class="header_area">
                        
                        <div class="left_area">
                            <h4>Owner dashboard <span> <label for=""> <i class="fas fa-bars" id="sidebar_btn"></i></label></span></h4>   
                        </div>
                        <div class="right_area">
                            <a href="logout.php" class="logout_btn"><bold><i class="fas fa-sign-out-alt"></i> Logout</bold></a>
                        </div>
                    </div>
                    
                    <!-- header area end  -->
                    
                    <!-- sidebar area start  -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">

                    <div class="sidebar">
                        <center>
                            <!--<img src="img/pro_pic1.jpg" class="profile_image">-->
                            <div class="pro_php">
                                <span class="profile_image"><?= $img ?></span>
                            </div>
                            <h4 style="padding-top: 15px;"><?php echo $_SESSION['name']; ?></h4>
                        </center>
                        <a href="Owner_panel_new.php"><i class="fas fa-backward"></i><span> Main Panel</span></a>
                        <a href="Owner_edit_profile.php"><i class="fas fa-user-edit"></i><span> Edit Profile</span></a>
                       <!-- <a href="#"><i class="fas fa-users"></i><span> View Users</span></a>
						<a href="Owner_building_new.php"><i class="fas fa-building"></i><span> Add Building</span></a>
                        <a href="Owner_room_new.php"><i class="fa fa-person-booth"></i><span> Add Room</span></a>
                        <a href="build_fetch.php"><i class="fas fa-building"></i><span> Building Details</span></a>
                        <a href="#"><i class="fas fa-receipt"></i><span> Payment Details</span></a>-->
                        
                    </div>
                            </div>
                          
                            
        <div class="col-sm-6 col-lg-8">
                                
                                
        <div class="container" style="padding-top: 50px;">
         <center>
          <div class="panel panel-info">
            <div class="panel-heading" style="padding-bottom: 30px; padding-top : 0px;">
                <h3 class="panel-title" style="color: #bd9c50; padding-bottom: 20px;"><?php echo $_SESSION['name']; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6 col-lg-6 " align="center">
				<!--<img alt="User Pic" src="" class="img-circle img-responsive" width="200px;" height="200px;" style="border-radius: 50%;"> -->
				<div class="img-circle img-responsive" width="150px;" height="150px;" style="border-radius: 50%;"><?= $img ?></div>
				</div>
                <div class=" col-md-6 col-lg-6 "> 
                  <table class="table table-user-information">
                    <tbody>
                        <tr>
                       <td class="info">NAME</td>
                        <td><?php echo $_SESSION['name']; ?></td>
                      </tr>
                        <tr>
                        <td class="info">GENDER</td>
                        <td><?php echo $_SESSION['gen']; ?></td>
                      </tr>
                        <tr>
                        <td class="info">AGE</td>
                        <td><?php echo $_SESSION['age']; ?></td>
                      </tr>
                        <tr>
                        <td class="info">HOME ADDRESS</td>
                        <td><?php echo $_SESSION['add']; ?></td>
                      </tr>
                      <tr>
                        <td class="info">EMAIL ID</td>
                        <td><a href="mailto:info@support.com" style="color : black;"><?php echo $_SESSION['mail']; ?></a></td>
                      </tr>
					    <tr>
                        <td class="info">LOGIN TYPE</td>
                        <td> <?php echo $_SESSION['utype']; ?></td>
                      </tr>
                     <tr>
                        <td class="info">CONTACT</td>
                        <td><?php echo $_SESSION['con']; ?><br></td>   
                      </tr>
                      <tr>
                        <td class="info">REGISTER DATE</td>
                        <td><?php echo $_SESSION['rdate'] ?></td>
                      </tr>                             
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
            </center>
        
    </div>
        
                                
                                
                            </div>
                            
                        </div>
                </div>
                    <!-- sidebar area end  -->          
                
            </div>
        </div>        
    </div>
   <!--::Admin Dashboard part end::--> 
    
    
    
     <!--::footer_part start::-->
    
   <footer class="footer_part reg_footer">
      <div class="container">
          <div class="row">
                <div class="col-sm-6 col-lg-6">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by RentiMent 
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="footer_icon">
                          <ul class="list-unstyled">
                             <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                             <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                             <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                             <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                            </ul>
                    </div>
                </div>
        </div>
        </div>    
   </footer>
    
   <!--::footer_part end::-->
    
    
    
   <!--::footer_part end::-->
   <!-- jquery plugins here-->
   <!-- jquery -->
   <script src="js/jquery-1.12.1.min.js"></script>
   <!-- popper js -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap js -->
   <script src="js/bootstrap.min.js"></script>
   <!-- easing js -->
   <script src="js/jquery.magnific-popup.js"></script>
   <!-- particles js -->
   <script src="js/owl.carousel.min.js"></script>
   <!-- easing js -->
   <script src="js/jquery.easing.min.js"></script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>


