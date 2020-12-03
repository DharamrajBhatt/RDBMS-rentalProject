<?php
session_start();
$uid=$_SESSION['uid'];
$img=$_SESSION['pic'];
//include 'build_fetch.php';
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
									<a class="nav-link" href="about.php">About Us</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="User_room_search.php">Search Rooms</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact.php">Contact us</a>
								</li>
                                <li class="nav-item">
									<a class="nav-link" href="feedback.php">Feedback</a>
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
                            <h4>User dashboard <span> <label for=""> <i class="fas fa-bars" id="sidebar_btn"></i></label></span></h4>   
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
							<span class="profile_image"><?= $img ?></span>
                            <h4><?php echo $_SESSION['name']; ?></h4>
                        </center>
                         <a href="User_panel_new.php"><i class="fas fa-backward"></i><span> Main Panel</span></a>
						   
                    </div>
                            </div>
                          
                            
        <div class="col-sm-6 col-lg-8">
                                
                                
        <div class="container" style="padding-top: 50px;">
         <center>
		 
		    <div class="panel panel-info">
            <div class="panel-heading" style="padding-bottom: 30px; padding-top : 0px;">
                <h3 style="color:#bd9c50;"> ROOM DETAILS </h3>
            </div>
            <div class="panel-body"> 
              <div class="row" > 
                <div class="col-md-6 col-lg-12 " align="center">
				<table class="table table-user-information">
                    <tbody>
					<tr>
					     <th>Owner Name</th>
						 <th>Owner Contact</th>
						 <th>Owner Email</th>
                         <th>Building Id</th>
						 <th>Building Name</th>
                         <th>Room ID</th>
					     <th>Room Type</th>
						 <th>Room No</th>
						 <th>Book Date</th>
						  </tr>
<?php
include 'connection.php';        
if ($con->connect_error) 
{
  die("Connection failed: " . $con->connect_error);
}

$sql = "select * from building b join book_user bu on bu.Building_id=b.Building_id
JOIN registration r where r.User_id in(SELECT User_id from registration where User_id='$uid')";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{
while($row = $result->fetch_assoc())
{
  echo "<tr>";
  echo "<td>".$row['Name']."</td>";
  echo "<td>".$row['Contact']."</td>";
  echo "<td>".$row['Email']."</td>";
  echo "<td>".$row['Building_id']."</td>";
  echo "<td>".$row['B_Name']."</td>";
  echo "<td>".$row['Room_id']."</td>";
  echo "<td>".$row['Room_type']."</td>";
  echo "<td>".$row['Room_no']."</td>";
  echo "<td>".$row['book_date']."</td>";
  echo "</tr>";
}
}
else 
{
  echo "0 results";
}
$con->close();
?>
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
		<!-- <button name="submit" type="submit" class=""><a href="Owner_building_new.php"><strong> Add Building</strong></a></button>-->
    </div>
   <!--::Admin Dashboard part end::--> 
    
    
    
     <!--::footer_part start::-->
	
		<?php 
			require_once 'footer.php';
		?>
	
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

