<?php
session_start();
$uid=$_SESSION['uid'];

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
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
<script src="jquery.min.js"></script>
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
						<div class="btn_1 d-none d-lg-block">
							<a href="User_panel_new.php" class="float-right"> <i class="fas fa-backward"></i> Back to profile </a>
						</div>
                        <!--<div class="btn_1 d-none d-lg-block">
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
		 <?php
    //Include database configuration file
    include('dbConfig.php');
    //Get all country data
    $query = $db->query("SELECT * FROM book_user where User_id='$uid'");
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
          <form class="form-contact contact_form" action="complain_submit.php" method="post" name="cform" onsubmit="return validate()" enctype="multipart/form-data">
            <div class="row">
			<div class="col-sm-6">
			    <span id="type1">
				<select name="b_name" class="form-control" id="b_name">
                <option selected="b_name"> SELECT YOUR BUILDING</option>
                       <?php
			            if($rowCount > 0)
						{
                        while($row = $query->fetch_assoc())
						{ 
                        echo '<option value="'.$row['B_Name'].'">'.$row['B_Name'].'</option>';
						}
						}
						else
						{
                        echo '<option value="">Building not available</option>';
                        }
                      ?>          
				</select>
				</span>
</div> 
                    <div class="col-sm-6">
					<span id="type2">
				     <select name="rno" class="form-control" id="rno">
                       <option selected="rno"> SELECT YOUR Room No</option>
					    </select>
						</span>
				    </div>
					<div class="col-sm-6">
                <div class="form-group" style="postion:absolute;margin-top:30px;">
                  <input class="form-control placeholder hide-on-focus" name="user_id" id="name" value="<?="$uid"?>" type="text" placeholder="User Id">
                </div>
              </div>
              <div class="col-sm-6" style="postion:absolute;margin-top:30px;">
                <div class="form-group">
                  <input class="form-control" name="image" id="image" type="file">
                </div>
              </div>
				
               <div id="pass_cnf_div">
			   <center>
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control placeholder hide-on-focus" style="width:540px;" name="message" id="message" cols="30" rows="9" placeholder="Enter Your Complain"></textarea>
                <div id="pass_cnf_error"></div>               
			   </div>
              </div>
			  </center>
			  </div>
              
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1" name="filed" style="margin-left:0px;">Send Complain</button>
            </div>
          </form>
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

<script type="text/javascript">
$(document).ready(function(){
    $('#b_name').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html)
				{
                    $('#rno').html(html);
                }
            }); 
        }
		else
		{
            $('#rno').html('<option value="">Select Building first</option>');
        }
    });
});
</script>

