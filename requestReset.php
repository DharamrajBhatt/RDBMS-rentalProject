
<!-- <form method="post">
  <input type="text" name="email" placeholder="Email" value="">
  <br>
  <input type="submit" name="submit" value="Submit">

</form> -->


<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
//require 'vendor/autoload.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require 'config.php';


if(isset($_POST["email"])){

  $emailTo = $_POST["email"];

  $found=0;

$sql = "select * from registration";
$result = $con->query($sql);

if ($result->num_rows > 0)
{
  // output data of each row
  while($row = $result->fetch_assoc())
  {
	 //checking the three parameter(if it already exists) for userid, mobile and email
   if($emailTo == $row["Email"])
   {
	   $found=1;
	   break;
   }
}
if($found == 0)
	{
		echo "<script>alert('Email id does not match with account Email id !! please enter the correct Email id')</script>";
		echo "<script>window.location.href='requestReset.php';</script>";
	}
else
{



  $code = uniqid(true);
  $query = mysqli_query($con, "INSERT INTO resetpassword(code,email) VALUES ('$code','$emailTo')");
  if(!$query){
    exit("Error");
  }

  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
      //Server settings
      //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'abdvirat78@gmail.com';                 // SMTP username
      $mail->Password = 'abdvirat@78';                           // SMTP password
      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 465;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('abdvirat78@gmail.com', 'Rentiment');
      $mail->addAddress($emailTo);     // Add a recipient
      //$mail->addAddress('ellen@example.com');               // Name is optional
      $mail->addReplyTo('no-reply@gmail.com', 'No reply');
    //  $mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');

      //Attachments
    //  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      //Content

      $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetpassword.php?code=$code";
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Your password Reset link';
      $mail->Body    = "<h1>Reset link</h1>
                        Click <a href='$url'> link</a> to reset your passsword";
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
    //  echo 'Reset password link has been sent to your email account';
    echo "<script>alert('Reset password link has been sent to your email account')</script>";
    echo "<script>window.location.href='login.php';</script>";
  } catch (Exception $e) {
      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }
  exit();
}
}
}
?>

<!-- <form method="post">
  <input type="text" name="email" placeholder="Email" value="">
  <br>
  <input type="submit" name="submit" value="Submit">

</form> -->
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
    <h1 class="form-heading" style="color:#bd9c50;">Give your Email</h1>
    <div class="login-form">
    <div class="main-div">

        <form method="post" onsubmit="return Validate()">

			<div id="user_id">
            <div class="form-group input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope fa_fa_color"></i> </span>
            </div>
            <input name="email" class="form-control" placeholder="Enter your account Email" type="email" >
		      	<div id="user_error"></div>
            </div>
			</div>


            <button type="submit" class="btn" style="margin:20px; background-color:#bd9c50; color:#fff;" name="submit"><strong>Submit</strong></button>


        </form>
       </div>
        </div>

    </div></div>

        </center>
        </article>
    </div>

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
