
<?php

include ("config.php");

if(!isset($_GET["code"])){
  exit("can't find the page");
}

$code = $_GET["code"];

$getEmailQuery = mysqli_query($con, "SELECT email FROM resetpassword WHERE code = '$code'");
if(mysqli_num_rows($getEmailQuery) == 0){
  exit("can't find the page");
}
if(isset($_POST["password"])){
  $pass = $_POST["password"];

  $row = mysqli_fetch_array($getEmailQuery);
  $email = $row["email"];

  $query = mysqli_query($con, "UPDATE registration SET Password = '$pass' WHERE Email = '$email'");

  if($query){
    $query = mysqli_query($con, "DELETE FROM resetpassword WHERE code = '$code'");
    //exit("Password updated sucessfully!!!!");
    echo "<script>alert('Password updated sucessfully!!!!')</script>";
    echo "<script>window.location.href='login.php';</script>";
  }
  else {
   exit("ohh no!!!! something went wrong");
  }

}

?>


<html>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
   <!-- style CSS -->
   <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/rental_style.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <style>
 .alert
 {
  padding: 20px;
  background-color: #f44336;
  position: absolute;
  top: 120px;
  margin-left: 370px;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.closebtn {
  margin-left: 15px;
  color: lime;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: green;
}
</style>
</head>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<body onload="reload()">
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


   <!--::Login part start::-->
    <div class="card">
    <article class="card-body mx-auto" style="max-width: 400px;">

    <center>
    <div class="container" style="padding-top:200px;">
    <h1 class="form-heading" style="color:#bd9c50;">Reset Password</h1>
    <div class="login-form">
    <div class="main-div">
        <!-- <div class="panel">
       <img src="img/login.gif" style="padding:15px;">
       </div> -->
        <form method="post" >

			<!--User Id-->
			<div id="user_id">
            <div class="form-group input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock fa_fa_color"></i> </span>
            </div>
            <input name="password" id="txtPassword" class="form-control" placeholder="new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  type="password" >
			<div id="user_error"></div>
            </div>
			</div>

			<!--Paswword-->
			<div id="pass_id">
            <div class="form-group input-group">
             <div class="input-group-prepend">
             <span class="input-group-text"> <i class="fa fa-key fa_fa_color"></i> </span>
             </div>
             <input name="cnf_password" id="txtConfirmPassword" class="form-control" placeholder="confirm password" type="password">
			 <div id="pass_error"></div>
            </div>
			</div>

            <button type="submit" class="btn" style="margin:20px; background-color:#bd9c50; color:#fff;" name="submit" onclick="return Validate()"><strong>Update Password</strong></button>


        </form>
       </div>
        </div>

    </div></div>

        </center>
        </article>
    </div>

    <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>

   <!--::Login part end::-->



     <!--::footer_part start::-->

   <footer class="footer_part reg_footer">
      <div class="container">
            <div class="row">
                    <div class="col-sm-6 col-lg-6">
                       <div class="copyright_text">
                          <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by RentiMent </a>
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
