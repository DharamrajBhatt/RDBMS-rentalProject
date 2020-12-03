<?php
session_start();
?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>RentiMent || The home you deserve</title>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
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
   <link rel="stylesheet" href="css/rental_style.css">
   
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   
 </head>
 <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 <body>
  
 <!--::menu part start::-->
   <header class="main_menu box-bottom-shadow">
		<div class="container">
			<div class="row search-padding">
				<div class="col-lg-12 ">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="index.php"> <img src="img/logo2.png" class="search-logo" style="width:60%" alt="logo"> </a>
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
									<a class="nav-link active-color" href="#">Search Rooms</a>
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
                     
							
						
						}
                       ?>			
					</nav>
				</div>
			</div>
		</div>
	</header>
 <!--::menu part end::-->
 
 <!--::search part start::-->
 <div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="form-group search-bar3 mt-5">
				<div class="input-group search-bar1">
					<input type="text" name="search_text" class="form-control search-bar2" style="height: 35px; font-size: 16px;" id="search_text" placeholder="Search by Building Name or Location"/>
					<i class="fa fa-search search-btn-bar"></i>
				</div>
			</div>
		</div>	
		<div class="col-md-2"></div>		
	</div>
	<div id="result"></div>
 </div>
 <!--::search part end::-->

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






<script type="text/javascript" language="javascript">
$(document).ready(function(){
 load_data();
 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 
 //for text id
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
 
 /**********************************************************/
 $(document).on('click', '.btn_not_user', function(){  
	 var options = 
  {
   ajaxPrefix:''
  };
  new Dialogify('book/add_data_form.php', options)
   .title('Information')
   .buttons([
    {
     text:'Login',
	 type:Dialogify.BUTTON_PRIMARY,
     click:function(e)
	 {
        window.location.href='login.php';
     }
    },
	{
     text:'Registration',
	 type:Dialogify.BUTTON_PRIMARY,
     click:function(e)
	 {
        //this.close();
        window.location.href='registration.php';
     }
    }
   ])
   .showModal();
      });  
	 /**************************************************************************************/
  $(document).on('click', '.btn_user', function(){
  var id = $(this).attr('id');
  var options = {
   ajaxPrefix: '',
   ajaxData: {id:id},
   ajaxComplete:function(){
	   
    this.buttons([
	{
    text: 'Close',
    type: Dialogify.BUTTON_DANGER,
     click:function(e)
	 {
		this.close();
     }
	}]);
   }
  };
  new Dialogify('fetch_single.php', options)
   .title('View Rooom Details')
   .showModal();
 }); 
 
 
 
  $(document).on('click', '.book', function(){
  var id = $(this).attr('id');
  var options = {
   ajaxPrefix: '',
   ajaxData: {id:id},
   ajaxComplete:function(){
    this.buttons([
	{
    text: 'Yes',
    type: Dialogify.BUTTON_PRIMARY,
     click:function(e)
	 {
		alert("Room Booked Successfully !!!");
     }
	},
	{
    text: 'No',
    type: Dialogify.BUTTON_DANGER,
     click:function(e)
	 {
		this.close();
     }
	}]);
   }
  };
  new Dialogify('book.php', options)
   .title('View Rooom Details')
    .showModal();
 }); 
	  	 
	  /**********************************************************************************/
});

</script>

