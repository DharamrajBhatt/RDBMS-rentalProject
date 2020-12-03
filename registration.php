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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
   <!-- style CSS -->
   <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/rental_style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
</head>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<body onload="disp_date()">
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

   
   <!--::registration part start::-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <center>
                <div class="card reg_form">
                    <article class="card-body mx-auto" style="max-width: 400px;">
                        <h2 class="card-title mt-3 text-center" style="color:#fff;"><strong>Create Account</strong></h2>
                        <form action="submit.php" method="post" name="reg_form" onsubmit="return validate()" enctype="multipart/form-data">
                           <div id="fname_div">
						   <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user fa_fa_color" ></i> </span>
                                 </div>
                                <input name="fname" class="form-control" placeholder="Full Name" pattern="[A-Za-z ]{1,32}" type="text">
								<div id="fname_error"></div>
								</div>
							</div> <!-- form-group// -->
                            
							<div id="add_div">
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-address-book fa_fa_color"></i> </span>
                                 </div>
                                <input name="address" class="form-control" placeholder="Address" type="text">
								<div id="add_error"></div>
								</div>
                            </div>
                            
                             <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-transgender fa_fa_color"></i> </span>
                                 </div>
								 <span id="gen">
                                <input type="radio" id="male" name="gender" value="male" style="margin:10px;">
                                      <label for="male" style="margin:5px;">Male</label>
                                      <input type="radio" id="female" name="gender" value="female" style="margin:10px;">
                                      <label for="female" style="margin:5px;">Female</label>
                                      <input type="radio" id="other" name="gender" value="other" style="margin:10px;">
                                      <label for="other" style="margin:5px;">Other</label><br>
								</span>
                            </div>
                            
							<div id="mob_div">
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-phone fa_fa_color"></i> </span>
                                </div>
                                <input name="mob_no" id="mob_id" class="form-control" placeholder="Phone number" type="text">
								<div id="mob_error"> </div>
								</div>
                            </div> <!-- form-group// -->
                            
							<div id="age-div">
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-birthday-cake fa_fa_color"></i> </span>
                                </div>
                                <input name="age" id="age_id" class="form-control" placeholder="Age" min="16" max="120" type="number">
                                 <div id="age-error"></div>
							    </div>                           
						   </div> <!-- form-group// -->
                            
							 <div id="email_div">
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-envelope fa_fa_color"></i> </span>
                                 </div>
                                <input name="mail" class="form-control" placeholder="Email address" type="email">
								<div id="email_error"></div>
								</div>
                              </DIV> <!-- form-group// -->
                            
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-users fa_fa_color"></i> </span>
                                </div>
								<span id="type">
                                <select name="u_type" class="form-control" id="utype">
                                    <option selected=""> Select User Type</option>
                                    <option value="user">USER</option>
                                    <option value="owner">OWNER</option>
                                </select>
								</span>
                            </div> <!-- form-group end.// -->
                            
							 <div id="user_div">
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-user-plus fa_fa_color"></i> </span>
                                 </div>
                                <input name="userid" class="form-control" placeholder="User Id" type="text">
								<div id="user_error"></div>
								</div>
                            </div> <!-- form-group// -->
                            
							<div id="pass_div">
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock fa_fa_color"></i> </span>
                                </div>
                                <input name="password" class="form-control" placeholder="Create password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" type="password">
                               <div id="pass_error"></div>
							   </div>
							</div> <!-- form-group// -->
							<div id="pass_cnf_div">
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-key fa_fa_color"></i> </span>
                                </div>
                                <input name="cnf_password" class="form-control" placeholder="Confirm password" type="password">
                                <div id="pass_cnf_error"></div>
								</div>
							</div> <!-- form-group// --> 
                            <!--
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-calendar fa_fa_color"></i> </span>
                                </div>
                                <input name="date" class="form-control" type="text">
                            </div>
							-->
							<!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-camera-retro fa_fa_color"></i> </span>
                                </div>
                                <input name="profile_pic" class="form-control"  type="file" required>
                            </div> <!-- form-group// -->
                            
                            
                            
                            <div class="form-group">
                                <button name="submit" type="submit" name="register" class="btn btn-block btncolor"> Create Account  </button>
                            </div> <!-- form-group// -->      
                            <p class="text-center" style="color:#000;">Have an account? <a href="login.php" style="color:#CFB579;">Log In</a> </p>                                                                 
                        </form>
                    </article>
                </div>
                </center>
            </div>
        </div>
    </div>

   <!--::registration part end::--> 
    
    
    
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
<script type="text/javascript">

    /*******************************  VALIDATION  PART ***********************************/
	var f_name=document.forms["reg_form"]["fname"];
	var add=document.forms["reg_form"]["address"];
	var mob=document.forms["reg_form"]["mob_no"];
	var age=document.forms["reg_form"]["age"];
	var mail=document.forms["reg_form"]["mail"];
	var user_id=document.forms["reg_form"]["userid"];
	var pass=document.forms["reg_form"]["password"];
	var pass_cnf=document.forms["reg_form"]["cnf_password"];
	var fname_error=document.getElementById("fname_error");
	var add1_error=document.getElementById("add_error");
	var mob_error=document.getElementById("mob_error");
	var age_error=document.getElementById("age-error");
	var mail_error=document.getElementById("email_error");
	var user_error=document.getElementById("user_error");
	var passerror=document.getElementById("pass_error");
	var cnferror=document.getElementById("pass_cnf_error");
	f_name.addEventListener('blur', nameVerify, true); 
	add.addEventListener('blur', addVerify, true); 
	mob.addEventListener('blur', mobVerify, true);
	age.addEventListener('blur', ageVerify, true);
	mail.addEventListener('blur', mailVerify, true);
	user_id.addEventListener('blur', userVerify, true);
	pass.addEventListener('blur', passVerify, true);
	pass_cnf.addEventListener('blur', passcnfVerify, true);
	
	
	//main validation part
	function validate()
	{
		/****************  Code to validate when the field is Empty Or Not Selected**********************/
		
		//combo box validation
		var combo1 = document.getElementById("utype");
		if(combo1.value == null || combo1.value == "") 
		{
		alert("Please select a User");
		document.getElementById("type").style.border = "2px solid red";
		return false;
		} 
		else 
		{
		document.getElementById("type").style.border = "";
		}
		if(f_name.value == "")
	    {
			f_name.style.border="1px solid red";
			document.getElementById("fname_div").style.color="red";
			fname_error.textContent="*Name can't be empty!";
			f_name.focus();
			return false;
		}
		
		 if(add.value == "")
	    {
			add.style.border="1px solid red";
			document.getElementById("add_div").style.color="red";
			add1_error.textContent="*Address Field can't be empty!";
			add.focus();
			return false;
		}
		
		//radio button validation
		var a = 0, rdbtn=document.getElementsByName("gender");
		for(i=0;i<rdbtn.length;i++) 
		{
		if(rdbtn.item(i).checked == false) 
		{
		a++;
		}
		}
		if(a == rdbtn.length) 
		{
			alert("Please select your gender");
			document.getElementById("gen").style.border = "2px solid red";
			return false;
		} 
		else 
		{
		document.getElementById("gen").style.border = "";
		}
	    if(mob.value == "")
	    {
			mob.style.border="1px solid red";
			document.getElementById("mob_div").style.color="red";
			mob_error.textContent="*Mobile Can't Be Empty!";
			mob.focus();
			return false;
		}
		
		if(mob.value.length!=10 )   //validation to check whether mob no is not more than 10
		{
			mob.style.border="1px solid red";
			document.getElementById("mob_div").style.color="red";
			mob_error.textContent="*No Cannot be less than or greater than 10 digit!!";
			mob.focus();
			return false;
		}
		
		if(age.value == "")
	    {
			age.style.border="1px solid red";
			document.getElementById("age-div").style.color="red";
			age_error.textContent="*Age can't be empty!";
			age.focus();
			return false;
		}
		
			if(mail.value == "")
	    {
			mail.style.border="1px solid red";
			document.getElementById("email_div").style.color="red";
			mail_error.textContent="*Mail cant be empty!";
			mail.focus();
			return false;
		}
		
			if(user_id.value == "")
	    {
			user_id.style.border="1px solid red";
			document.getElementById("user_div").style.color="red";
			user_error.textContent="*User id can't be empty!";
			user_id.focus();
			return false;
		}
		
		if(pass.value == "")
	    {
			pass.style.border="1px solid red";
			document.getElementById("pass_div").style.color="red";
			passerror.textContent="*Password Field can't be Empty";
			pass.focus();
			return false;
		}
		
		if(pass_cnf.value == "")
	    {
			pass_cnf.style.border="1px solid red";
			document.getElementById("pass_cnf_div").style.color="red";
			pass_cnf.textContent="*Field Can't Be Empty";
			pass_cnf.focus();
			return false;
		}	
		if(pass.value!=pass_cnf.value)
		{
			pass.style.border="1px solid red";
			document.getElementById("pass_div").style.color="red";
			pass_error.textContent="*Password Does not match !!";
			pass.focus();
			return false;
		}

	}
	
	function nameVerify()
	{
		if(f_name.value != "")
	    {
			f_name.style.border="1px solid green";
			document.getElementById("fname_div").style.color="green";
			fname_error.innerHTML="";
			return true;
		}
		
	}
   
  
	function addVerify()
	{
		if(add.value != "")
	    {
			add.style.border="1px solid green";
			document.getElementById("add_div").style.color="green";
			add1_error.innerHTML="";
			return true;
			
		}
	}
	
	function mobVerify()
	{
		 if(mob.value != "")
	    {
			mob.style.border="1px solid green";
			document.getElementById("mob_div").style.color="green";
			mob_error.innerHTML="";
			return true;
		}
		
		if(mob.value.length == 10 )   //validation to check whether mob no is not more than 10
		{
			mob.style.border="1px solid green";
			document.getElementById("mob_div").style.color="green";
			mob_error.innerHTML="";
			return true;
		}
	}
	
	function ageVerify()
	{
		if(age.value != "")
	    {
			age.style.border="1px solid green";
			document.getElementById("age-div").style.color="green";
			age_error.innerHTML="";
			return true;
		}
	}
	
	function mailVerify()
	{
		if(mail.value != "")
	    {
			mail.style.border="1px solid green";
			document.getElementById("email_div").style.color="green";
			mail_error.innerHTML="";
			return true;
		}
	}
	
	function userVerify()
	{
		if(user_id.value != "")
	    {
			user_id.style.border="1px solid green";
			document.getElementById("user_div").style.color="green";
			user_error.innerHTML="";
			return true;
		}
	}
	
	function passVerify()
	{
		if(pass.value != "")
	    {
			pass.style.border="1px solid green";
			document.getElementById("pass_div").style.color="green";
			passerror.innerHTML="";
			return true;
		}
		
		if(pass.value == pass_cnf.value)
		{
			pass.style.border="1px solid green";
			document.getElementById("pass_div").style.color="green";
			pass_error.innerHTML="";
			return true;
		}
	}
	
	function passcnfVerify()
	{
	  if(pass_cnf.value != "")
	    {
			pass_cnf.style.border="1px solid grren";
			document.getElementById("pass_cnf_div").style.color="green";
			pass_cnf.innerHTML="";
			return true;
		}

     if(pass.value == pass_cnf.value)
		{
			pass.style.border="1px solid green";
			document.getElementById("pass_div").style.color="green";
			pass_error.innerHTML="";
			return true;
		}		
	}
	
	/**********************************  DISPLAY DATE ********************************************/
	
	 function disp_date()
	 {
	 var d = new Date(); ///DATE constructor
	 var dy= d.getDate();
     var mnth=d.getMonth()+1;
     var yr=d.getFullYear();
	 var date=document.reg_form.date.value= yr+"-"+mnth+"-"+dy;
	 //clearing the values on load
	 f_name.value="";
	 add.value="";
	 mob.value="";
	 age.value="";
	 mail.value="";
	 user_id.value="";
	 pass.value="";
	 pass_conf.value="";
	 }
	</script>
</html>
