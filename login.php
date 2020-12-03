<?php
 session_start();
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
   <header class="main_menu home_menu box-bottom-shadow">
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

   
   <!--::Login part start::-->
    <div class="card card-my">
    <article class="card-body mx-auto" style="max-width: 400px;">
    
    <center>
    <div class="container" style="padding-top:200px;">
    <h1 class="form-heading" style="color:#bd9c50;">LOGIN FORM</h1>
    <div class="login-form">
    <div class="main-div">
        <div class="panel">
       <img src="img/login.gif" style="padding:15px;">
       </div>
        <form method="post" action="" id="myform" name="login_form" onsubmit="return Validate()">
            
			<!--User Id-->
			<div id="user_id">
            <div class="form-group input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user-plus fa_fa_color"></i> </span>
            </div>
            <input name="userid" class="form-control" placeholder="User Id" type="text" >
			<div id="user_error"></div>
            </div>
			</div>
            
			<!--Paswword-->
			<div id="pass_id">
            <div class="form-group input-group">
             <div class="input-group-prepend">
             <span class="input-group-text"> <i class="fa fa-lock fa_fa_color"></i> </span>
             </div>
             <input name="password" class="form-control" placeholder="password" type="password">
			 <div id="pass_error"></div>
            </div>
			</div>
			
			
            <div class="forgot">
            <a href="requestReset.php" style="color:#bd9c50;">Forgot password?</a>
            </div>
			
			
            <button type="submit" class="btn" style="margin:20px; background-color:#bd9c50; color:#fff;" name="sumit"><strong>Login</strong></button>

            <p class="text-center" style="color:#000;">Haven't an account? <a href="registration.php" style="color:#bd9c50;">Register</a> </p>   
        </form>
       </div>
        </div>

    </div></div>

        </center>
        </article>
    </div>

    
   <!--::Login part end::--> 
    
    
    
     <!--::footer_part start::-->
	
	<?php 
		require_once 'footer.php';
	?>
	
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

 <?php
	include('connection.php');  
	 if($_SERVER["REQUEST_METHOD"] == "POST")
      {
        $username = $_POST['userid'];  
        $password = $_POST['password']; 
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from registration where User_id = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  //function will return 1 if it succeed in finding the data
        if($count > 0)
        {
			$_SESSION['name']=$row['Name'];
			$_SESSION['add']=$row['Address'];
			$_SESSION['gen']=$row['Gender'];
			$_SESSION['con']=$row['Contact'];
			$_SESSION['age']=$row['Age'];
			$_SESSION['mail']=$row['Email'];
			$_SESSION['utype']=$row['User_Type'];
			$_SESSION['uid']=$row['User_id'];
			$_SESSION['rdate']=$row['Reg_date'];
			$_SESSION['pic']='<img src="data:image;base64,'.base64_encode($row['Pro_pic']).'">';
			if($_SESSION['utype'] == "user")
			{
				echo "<script>window.location.href='User_panel_new.php';</script>";
			}
			else
			{
				echo "<script>window.location.href='Owner_panel_new.php';</script>";
			}
        }  
        else
        {  
          echo "<div  class='alert'><span class='closebtn'>&times;</span>  
		<strong>Invalid !!!</strong> Please Enter a Valid Login Id Or Password
		</div>";
        }
	  }     
?>







<!--    Javascript Section-->
<script type="text/javascript">
	var user=document.forms["login_form"]["userid"];
	var pass=document.forms["login_form"]["password"];
	var uerror=document.getElementById("user_error");
	var perror=document.getElementById("pass_error");
	user.addEventListener('blur',userVerify,true);
	pass.addEventListener('blur',passVerify,true);
	function Validate()
	{
		if(user.value == "")
		{
		user.style.border="1px solid red";
		document.getElementById("user_id").style.color="red";
		uerror.textContent="* User Id Cannot be Empty";
		user.focus();
		return false;
		}
		
		if(pass.value == "")
		{
			pass.style.border="1px solid red";
			document.getElementById("pass_id").style.color="red";
			perror.textContent="* Paswword Cant Be Empty!!";
			pass.focus();
			return false;
		}
	}
	
	/**** This Function in order to reset the Error Message**/
	function userVerify()
	{
		if(user.value != "")
		{
			user.style.border="1px solid green";
			document.getElementById("user_id").style.color="green";
			uerror.innerHTML="";
			return true;
		}
	}
	
	function passVerify()
	{
		if(pass.value != "")
		{
			pass.style.border="1px solid green";
			document.getElementById("pass_id").style.color="green";
			perror.innerHTML="";
			return true;
		}
	}

/***********************************************Code for Popup Button*********************/
	var close = document.getElementsByClassName("closebtn");
	var i;
	for (i = 0; i < close.length; i++) 
	{
	close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
	}
	}
</script>


