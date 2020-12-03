<?php
session_start();
$name=$_SESSION['name'];
$img=$_SESSION['pic'];
$uid=$_SESSION['uid'];
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
        .reg_form
        {
            margin-top: 50px;
            margin-bottom: 20px;
            padding: 80px;
            background-image: url(./img/room5.jpg);
            background-size: cover;
        }
        .btncolor
        {
            background-color: #cfb579;
            color: #fff;
            
        }
        .btncolor:hover
        {
            color: #fff;
            background-color: #bd9c50;
        }
        .reg_footer
        {
            padding-bottom:5px;
        }
        .fa_fa_color
        {
            color:#bd9c50;
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
                            <a href="login.php" class="logout_btn"><bold><i class="fas fa-sign-out-alt"></i> Logout</bold></a>
                        </div>
                    </div>
                    
                    <!-- header area end  -->
                    
                    <!-- sidebar area start  -->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">

                    <div class="sidebar">
                        <center>
							<span class="profile_image"><?= $img ?></span>
							<br><br>
                            <h4><?=$name?></h4>
                        </center>
                        <a href="view_rooms.php"><i class="fas fa-backward"></i><span> Go to Previous Page</span></a>
                       </div>
                       </div>
                          
                            
        <div class="col-sm-6 col-lg-8">
          
            <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <center>
                <div class="card reg_form">
                    <article class="card-body mx-auto" style="max-width: 400px;">
                        <h2 class="card-title mt-3 text-center" style="color:#fff; padding-bottom: 5px;"><strong>ADD ROOM</strong></h2>
                        <form action="room_submit.php" method="post" enctype="multipart/form-data">
                <div id="user_div">
                                        <div class="form-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-person-booth fa_fa_color"></i> </span>
                                             </div>
                                            <input name="room_id" class="form-control" placeholder="ROOM ID" type="text">
            								<div id="user_error"></div>
            								</div>
                          </div>

                          <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-pencil-alt fa_fa_color"></i> </span>
                                        </div>
        								<span id="type">
                                        <select name="r_type" class="form-control" id="utype">
                                            <option selected=""> SELECT ROOM TYPE</option>
                                            <option value="1BHK">1BHK</option>
                                            <option value="2BHK">2BHK</option>
                                            <option value="3BHK">3BHK</option>
                                        </select>
        								</span>
                        </div>
						  <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-pencil-alt fa_fa_color"></i> </span>
                                        </div>
        								<span id="type">
						<select name="b_name" class="form-control" id="utype">
                       <option selected="b_name"> SELECT YOUR BUILDING</option>
                       <?php
						include 'connection.php';        
						if ($con->connect_error) 
						{
							die("Connection failed: " . $con->connect_error);
						}
						$sql = "SELECT B_Name from building where User_id='$uid'";
						$result = $con->query($sql);
						if ($result->num_rows > 0) 
							{
								// output data of each row
								while($row = $result->fetch_assoc()) 
									{
										echo  '<option value="'.$row['B_Name'].'">'.$row['B_Name'].'</option>';
									}
							} 
						else 
							{
								echo "0 results";
							}
						$con->close();
?>
                   </select>
				   </span>
				   </div>
                        <div id="age-div">
                                      <div class="form-group input-group">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text"> <i class="fa fa-building fa_fa_color"></i> </span>
                                          </div>
                                          <input name="floor" id="roomid" class="form-control" placeholder="FLOOR" min="1" type="number">
                                           <div id="age-error"></div>
                            </div>
                         </div>
                         <div class="form-group input-group">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text"> <i class="fas fa-door-open fa_fa_color"></i> </span>
                                       </div>
                       <span id="type">
                                       <select name="door_face" class="form-control" id="utype">
                                           <option selected=""> DOOR FACING</option>
                                           <option value="East">EAST</option>
                                           <option value="West">WEST</option>
                                           <option value="North">NORTH</option>
                                           <option value="South">SOUTH</option>
                                       </select>
                       </span>
                       </div>

                       <div id="age-div">
                                     <div class="form-group input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text"> <i class="fas fa-door-closed fa_fa_color"></i> </span>
                                         </div>
                                         <input name="r_no" id="roomid" class="form-control" placeholder="ROOM NUMBER" type="number">
                                          <div id="age-error"></div>
                           </div>
                        </div>

                        <div class="form-group input-group">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text"> <i class="fa fa-calendar fa_fa_color"></i> </span>
                                      </div>
                        <span id="type">
                                      <select name="status" class="form-control" id="utype">
                                          <option selected=""> STATUS</option>
                                          <option value="available">AVAILABLE</option>
                                          <option value="not available">NOT AVAILABLE</option>
                                      </select>
                        </span>
                        </div>
						  <div id="age-div">
                                     <div class="form-group input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text"> <i class="fas fa-door-closed fa_fa_color"></i> </span>
                                         </div>
                                         <input name="room_rent" id="roomid" class="form-control" placeholder="ENTER RENT" type="number">
                                          <div id="age-error"></div>
                           </div>
                        </div>
						<div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-camera-retro fa_fa_color"></i> </span>
                                </div>
                                <input name="room_pic" class="form-control"  type="file" required>
                            </div> 
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-block btncolor"><strong> Submit Room </strong></button>
                            </div> 
                        </form>
                    </article>
                </div>
                </center>
            </div>
        </div>
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