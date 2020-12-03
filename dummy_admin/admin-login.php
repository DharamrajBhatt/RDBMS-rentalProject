<?php



	include("includes/config.php");

	include("includes/classes/admin-Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/admin-login-handler.php");

	//if logoutButton clicked
	if(isset($_POST['logoutButton'])) {
      // echo "<h1> hi,logout button clicked</h1>";
         session_destroy();//destroy the session
        // header("Location: login.php");
    }

	function getInputValue($value){
		if(isset($_POST[$value])){
			echo "$_POST[$value]";
		}
	}
?>




<html>
<head>

	<meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Jobber - Job Board HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RentiMent || The home you deserveAdmin-Login!</title>

    <!-- Favicon -->
    <link href="images/logo2.png" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="css/style.css" />
</head>



<body class="bg-img">
<center>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12 admin-login">
        <h4 class="mb-5 heading-color">Login To Your Admin Account</h4>
      </div>
	</div>
   </div>
			<div class="col-lg-12">
			<form id="loginForm" action="admin-login.php" method="POST">
	          

	        <h2></h2>
				<p>
					<?php echo $account->getError(Constants::$loginFailed); ?>
					<label for="loginUsername" class="label-color">Username: </label>
					<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
				</p>
				<p>
					<label for="loginPassword" class="label-color">Password: </label>
					<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
				</p>

				<button type="submit" name="loginButton" class="login-btn">LOG IN</button>

			</form>
			</div>
			</div>
			</section>

<!--<section>
  <div class="container">
	    <div class="col-md-7 col-sm-5 d-flex align-items-center">
	    	<form id="loginForm" action="admin-login.php" method="POST">
	          <div class="section-title-02 mb-0 ">
	            <h4 class="mb-0">Login To Your admin-Account</h4>
	          </div>

	          <h2></h2>
				<p>
					<?php echo $account->getError(Constants::$loginFailed); ?>
					<label for="loginUsername">Username: </label>
					<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
				</p>
				<p>
					<label for="loginPassword">Password: </label>
					<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
				</p>

				<button type="submit" name="loginButton">LOG IN</button>

			</form>
	    </div>
    </div>
</section>-->
</body>
</center>
</html>
