<?php
session_start();
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
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            
      
      <style>
          .button-contactForm:hover
          {
               background-color: #d8b25a;
          }
          .blog_bg
          {
              background-image: url(./img/sofa.jpg);
          }
          </style>
      
  </head>
  <body>
   <!--::menu part start::-->
   <header class="main_menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="index.php"> <img src="img/logo2.png" style="width:60%" alt="logo"> </a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
							aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse main-menu-item home_hover" id="navbarNav">
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
									<a class="nav-link active-color" href="feedback.php">Feedback</a>
								</li>
                                <li>
                                    <div id="google_translate_element"></div>
                                    <script type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                    }
                                </script>
                                </li>
							</ul>
						</div>
					  <?php
						 if(empty($_SESSION['uid']) || $_SESSION['uid']== '')
                       {
                     //   echo '<h4><button type="button" class="btn btn-xs btn-info btn_not_user">View Details &#128269;</button></h4>';
                       
						echo '<div class="btn_1 d-none d-lg-block">
							<a href="login.php" class="float-right"> <i class="fas fa-user"></i> LOGIN </a>
						</div>
                        <div class="btn_1 d-none d-lg-block">
							<a href="registration.php" class="float-right"> <i class="fa fa-address-card"></i> SIGN UP</a>
						</div>';
					   }
						else
						{
					      if($_SESSION['utype']=='user')
							{
						  echo '<div class="btn_1 d-none d-lg-block">
							<a href="User_panel_new.php".php" class="float-right"> <i class="fas fa-backward"></i> Back to Profile</a>
						</div>';
							}
							else
							{
								echo '<div class="btn_1 d-none d-lg-block">
							<a href="Owner_panel_new.php".php" class="float-right"> <i class="fas fa-backward"></i> Back to Profile</a>
						</div>';
							}
                        echo '<div class="btn_1 d-none d-lg-block">
							<a href="logout.php" class="float-right"> <i class="fa fa-sign-out-alt"></i> Log Out</a>
						</div>';
							
						
						}
                       ?>			
					</nav>
				</div>
			</div>
		</div>
	</header>
 <!--::menu part end::-->

  <!-- ================  breadcrumb part start ================  -->
  <section class="breadcrumb blog_bg" style="border-radius:10px;">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb_iner">
                      <div class="breadcrumb_iner_item">
                          <h2>Feedback</h2>
                          <a href="index.php" style="color:#fff; font-size: 18px;">Home </a><span class="ti-angle-double-right" style="color:#fff; font-size: 18px;"></span><span style="color:#fff; font-size: 18px;">Feedback</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- ================ breadcrumb part start ================ -->

  <!-- ================ contact section start ================= -->
  <section class="contact-section area-padding">
    <div class="container">
      


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title" style="color:#bd9c50;">Give Your Feedback</h2>
        </div>
        <div class="col-lg-6">
          <form class="form-contact contact_form" action="feedback_submit.php" method="post">
            <div class="row">
                <div class="col-sm-12">
                <div class="form-group">
                  <input class="form-control placeholder hide-on-focus" name="name" id="name" pattern="[A-Za-z ]{1,32}" title="Required Character Only" type="text" placeholder="Enter your Name" required>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100 placeholder hide-on-focus" name="message" id="message" cols="30" rows="9" placeholder="Enter Your Valuable Message" required></textarea>
                </div>
              </div>
              
            </div>
             <center> 
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1" style="color:#bd9c50; color:#fff;">Send Feedback</button>
            </div>
              </center>
          </form>
        </div>
        <div class="col-lg-6">
          <center>
              <img src="img/feedback.gif" width="50%" height="50%">
            </center>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

 <!--::footer_part start::-->
	
		<?php 
			require_once 'footer.php';
		?>
	
	<!--::footer_part end::-->
	
 <!--::footer_part end::-->

<!-- ==================jquery plugins here ===================== -->
<!-- jquery -->
<script src="js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="js/jquery.easing.min.js"></script>
<!-- particles js -->
<script src="js/contact.js"></script>
<!-- carousel js -->
<script src="js/gmaps.min.js"></script>
<!-- easing js -->
<script src="js/jquery.ajaxchimp.min.js"></script>
<!-- particles js -->
<script src="js/jquery.form.js"></script>
<!-- magnific-popup js -->
<script src="js/jquery.magnific-popup.js"></script>
<!-- particles js -->
<script src="js/jquery.validate.min.js"></script>
<!-- carousel js -->
<script src="js/mail-script.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
</body>
</html>