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

   
        
  
    
</head>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

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
									<a class="nav-link active-color" href="#">About Us</a>
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

    <!--::breadcrumb part end::-->
    <section class="breadcrumb blog_bg" style="border-radius: 10px;">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb_iner">
                      <div class="breadcrumb_iner_item">
                          <h2>About Us</h2>
                          <a href="index.php" style="color:#fff; font-size: 18px;">Home </a><span class="ti-angle-double-right" style="color:#fff; font-size: 18px;"></span><span style="color:#fff; font-size: 18px;">About Us</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </section>
   <!--::breadcrumb part end::-->
   
    <!--::info part start::-->
	
	<div class="container">
		
		<div class="row about-us-info pt-5">
            <div class="col-sm-8 col-lg-7">
               <div class="section_tittle">
					<h1>Who We Are</h1>					
               </div>
            </div>		
			
         </div>
		 
		 <div class="row">
            <div class="col-sm-12 col-lg-12 about-us-info-pera">			
				<p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
				 Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
				 </p>
				 <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
				 </p>
				 <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
				 </p>
			</div>	
		</div>		
	</div>
	
		



 <!--::info part end::-->
  
   <!--::passion_part end::-->
   <div class="passion_part z_index">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section_tittle">
                  <h1>We Provides What Customer Needs?</h1>
               </div>
            </div>
         </div>
         <div class="row">
         <div class="col-md-6 col-lg-3">
            <div class="single_passion">
               <div class="single_passion_item">
                  <a href="#" class="passion_icon"> <i class="flaticon-compass"></i> </a>                  
                  <h4>Rooms in Affordable Price</h4>
                  <p>we provides the service to the customer to get their desire rooms
                     in a Affordable Price</p>
                  <a href="#" class="btn_2">Read More <span class="ti-arrow-right"></span></a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="single_passion">
               <div class="single_passion_item">
                  <a href="#" class="passion_icon"> <i class="flaticon-desk"></i> </a>                  
                  <h4>Maintinence of Rooms/Buildings</h4>
                  <p>we provides the Maintinence facility of rooms/buildings to the customer,
                     if they required</p>
                  <a href="#" class="btn_2">Read More <span class="ti-arrow-right"></span></a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="single_passion">
               <div class="single_passion_item">
                  <a href="#" class="passion_icon"> <i class="flaticon-bathroom"></i> </a>                  
                 <h4>Faster and Error-free Service</h4>
                  <p>We provides the service with accuracy and efficiency and
                     faster accessibility</p>
                  <a href="#" class="btn_2">Read More <span class="ti-arrow-right"></span></a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="single_passion">
               <div class="single_passion_item">
                  <a href="#" class="passion_icon"> <i class="flaticon-beach"></i> </a>
                   <h4>24*7 Service</h4>
                  <p>our website is 24*7 available for the customer to access it and for users
                     to do thier buisneess</p>
                  <a href="#" class="btn_2">Read More <span class="ti-arrow-right"></span></a>
               </div>
            </div>
         </div>
         </div>
      </div>
   </div>
   <!--::passion_part end::-->

   
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
 </body>

 </html>
