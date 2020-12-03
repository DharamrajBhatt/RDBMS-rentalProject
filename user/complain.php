<?php
session_start();
$uid=$_SESSION['uid'];
if(empty($_SESSION['uid']) || $_SESSION['uid']== '')
{
 //header("Location: error.php");
  echo '<script>window.location.href="error.html"</script>';
  die();
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
              background-image: url(./img/room_1.png);
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
									<a class="nav-link" href="#">About Us</a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="contact.php">Contact us</a>
								</li>
                                <li class="nav-item">
									<a class="nav-link" href="feedback.php">Feedback</a>
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
						<!--<div class="btn_1 d-none d-lg-block">
							<a href="login.php" class="float-right"> <i class="fas fa-user"></i> LOGIN </a>
						</div>
                        <div class="btn_1 d-none d-lg-block">
							<a href="registration.php" class="float-right"> <i class="fa fa-address-card"></i> SIGN UP</a>
						</div>-->
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
                          <h2>Your Complain</h2>
                          <a href="index.php" style="color:#fff; font-size: 18px;">Home </a><span class="ti-angle-double-right" style="color:#fff; font-size: 18px;"></span><span style="color:#fff; font-size: 18px;">Complain</span>
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
            <h2 class="contact-title" style="color:#bd9c50;"><center>Complain Box</center></h2>
        </div>
        <div class="col-lg-12">
          <form class="form-contact contact_form" action="complain_submit.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                    
                  <input class="form-control placeholder hide-on-focus" name="user_id" id="name" value="<?="$uid"?>" type="text" placeholder="User Id">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="image" id="image" type="file">
                </div>
              </div>
                
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100 placeholder hide-on-focus" name="message" id="message" cols="30" rows="9" placeholder="Enter Your Complain"></textarea>
                </div>
              </div>
              
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm" style="color:#bd9c50; color:#fff;">Send Complain</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

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