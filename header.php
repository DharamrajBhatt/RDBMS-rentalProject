<?php
session_start();
?>
   <header class="main_menu home_menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand index-logo" href="index.php"> <img src="img/logo2.png" style="width:60%" alt="logo"> </a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
							aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse main-menu-item" id="navbarNav">
							<ul class="navbar-nav">
								<li class="nav-item active">
									<a class="nav-link active-color" href="index.php">Home<span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="about.php">About Us</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="User_room_search.php">Search Rooms</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="feedback.php">Feedback</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact.php">Contact us</a>
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