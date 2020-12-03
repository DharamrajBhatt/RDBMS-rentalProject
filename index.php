<?php
include 'connection.php';        
if ($con->connect_error) 
{
  die("Connection failed: " . $con->connect_error);
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
   <!-- style CSS -->
   <link rel="stylesheet" href="css/style.css">
</head>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
<body>

   <!--::menu part start::-->
		<?php
			require_once 'header.php';
		?>	
   
   <!--::menu part end::-->

   <!--::banner part start::-->
   <section class="banner_part">
      <div class="container">
         <div class="row align-content-center">
            <div class="col-lg-6">
               <div class="banner_text aling-items-center">
                  <div class="banner_text_iner">
                     <h5>Beautiful homes</h5>
                     <h2>Your Happiness Is Our Aim</h2>
                     <p>Looking to rent in a tight, competitive market or even a specific apartment community? A renter cover letter may not be required, but it could set you apart from the other potential candidates, increasing the odds that you'll be the one signing that coveted lease.</p>
                     <a href="User_room_search.php" class="btn_1 banner_btn ">View Home</a>
                     <div class="d-none d-xl-block banner_social_icon">
                        <ul class="list-inline">

                           <li class="list-inline-item"><a href="https://www.facebook.com/alengrace1996/?view_public_for=100518815190365"><span class="ti-facebook"></span>facebook</a><span
                                 class="dot"><i class="fas fa-circle"></i></span></li>
                           <li class="list-inline-item"><a href="#"><span class="ti-twitter-alt"></span>twitter</a><span
                                 class="dot"><i class="fas fa-circle"></i></span></li>
                           <li class="list-inline-item"><a href="#"><span class="ti-instagram"></span>instagram</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="https://www.youtube.com/watch?v=E611Vs9BpmU" class="popup-youtube video_popup"><span
            class="ti-control-play"></span></a>

   </section>
   <!--::banner part end::-->

<!--view more start-->

<div class="room_part">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-lg-6">
               <div class="room_1">
                  <img src="img/room_1.png" alt="">
                  <div class="room_text_1">
                     <h1>Here's to the start of a wonderful adventure.</h1>
                  <!--   <a href="#" class="btn_2">Read More <span class="ti-arrow-right"></span></a>-->
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-6">
               <div class="room_2">
                  <img src="img/room_2.png" alt="">
                  <div class="room_text_2">
                     <h1>It was an absolute pleasure helping you in the search for your new home.</h1>
                    <!-- <a href="#" class="btn_2">Read More <span class="ti-arrow-right"></span></a>-->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

<!--view more end-->

<!--::apartment_part end::-->
   <div class="apartment_part">
      <div class="container">
         <div class="row justify-content-between align-content-center">
            <div class="col-md-8 col-lg-7">
               <div class="section_tittle">
                  <h1>Provide The Beautiful Home</h1>
               </div>
            </div>
            <div class="col-md-4 col-lg-5">
               <div class="view_more_btn float-right d-none d-md-block">
                  <a href="User_room_search.php" class="btn_2">Read More <span class="ti-arrow-right"></span></a>
               </div>
            </div>
         </div>
		 <div class="row">

				  <?php
				   $sql = "SELECT p.B_Name,p.Address,c1.Rent_Amt,c1.Room_pic
                           FROM building AS p JOIN room AS c1 ON p.Building_id=c1.Building_id
						   AND c1.Status='available'";
                   $result = $con->query($sql);
                   if ($result->num_rows > 0) 
{

while($row = $result->fetch_assoc())
{

  echo  "         
		 
            <div class='col-md-4 col-lg-4'>
               <div class='single_appartment_part'>
                  <div class='appartment_img'>"."
  
                 
	                    
						<img src='{$row['Room_pic']}'>".
	 
	                    " <div class='single_appartment_text'>"
                        ."<h3>&#x20B9;".$row["Rent_Amt"]."</h3>".
                        "<p><span class='ti-location-pin'></span>".$row["Address"]."</p>
                     </div>".
					 
					 
		
                   
                " </div>
				  <center>
                  <div class='single_appartment_content'>
                    
                     <p style='font-weight:600; font-size:16px;'>".$row["B_Name"]."</p>
                     <a href='User_room_search.php'>
                        <h4>View Details</h4>
                     </a>       
					 </div>
               </div>
            </center>
			</div>";
}
}
else 
{
  echo "0 results";
}
//$con->close();
				  
				  ?>
		</div>
      </div>
	</div>
   <!--::apartment_part end::-->

  

  

<!--::passion_part end::-->
   <div class="passion_part z_index">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section_tittle">
                  <h1>We Provides
                  What Customer Needs?</h1>
               </div>
            </div>
         </div>
         <div class="row">
         <div class="col-md-6 col-lg-3">
            <div class="single_passion">
               <div class="single_passion_item">
                  <a href="#" class="passion_icon icon-padding"> <i class="fas fa-hand-holding-usd"></i> </a>                  
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
                  <a href="#" class="passion_icon" style="padding:18px;"> <i class="fas fa-clock"></i> </a>
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

   

   <!--::review_part end::-->
   <div class="review_part" id="testimonial">
      <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-12">
               <div class="section_tittle">
                  <h1>Our Happy Customer Says About us</h1>
               </div>
            </div>
        </div>
     
		<div class="row">
			<div class="col-lg-12">
				<div class="review_part_text owl-carousel">
					
					<?php
						$sql = "select * from feedback";
						$result = $con->query($sql);
						if ($result->num_rows > 0) 
						{
						while($row = $result->fetch_assoc())
						{
						  echo '
								
								<div class="singler_eview_part">
								<div class="testimonial-box">
								<div class="singler_eview_img"><i class="fas fa-user"></i></div>	
								<div class="client_info">
							
								<h4>'.$row['Name'].'</h4>
								<p>'.$row['Date'].'</p>
								</div></div>
								
								<p><i>'.$row['Comments'].'</i></p></div>';
						}
						}
						else 
						{
						  echo "0 results";
						}
						$con->close();
					?>
				</div>
			</div>
		</div>
		</div>
	</div>
       
   <!--::review_part end::-->

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
