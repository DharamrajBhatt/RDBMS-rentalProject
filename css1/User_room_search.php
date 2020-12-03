<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>RentiMent || The home you deserve</title>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />-->
  <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>-->
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
 <div class="container">
   <div class="form-group">
    <div class="input-group">
    <input type="text" name="search_text" id="search_text" placeholder="Search by Building Name or Location" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
   
 </div>
 		
  <!--::footer_part start::-->
   <footer class="footer_part">
      <div class="container">
         <div class="row">
            <div class="col-sm-6 col-lg-6">
               <div class="single_footer_part">
                  <h4>About Us</h4>
                  <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open</p>
                  <a href="index.html" class="footer_logo"> <img src="img/logo2.png"style="width : 30%;" alt="index.php"> </a>
               </div>
            </div>
            <div class="col-sm-6 col-lg-6">
               <div class="single_footer_part">
                  <h4>Contact Information</h4>
                  <p> F-102, Shri Ganesha app., Siddhivinayak road, BANGALORE.</p>
                  <p>Phone : +91 7778899912</p>
                  <p>Email : RentiMent@gmail.com</p>
               </div>
            </div>
   
         </div>
         <hr>
         <div class="row">
            <div class="col-sm-6 col-lg-6">
               <div class="copyright_text">
                  <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by RentiMent </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
               </div>
            </div>
            <div class="col-sm-6 col-lg-6">
               <div class="footer_icon">
                  <ul class="list-unstyled">
                     <li><a href="www.facbook.com" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="www.twitter.com" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                     <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </footer>
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






<script>
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
 /***************************************************************************************/
 /*
  $('#add_data').click(function(){
  var options = {
   ajaxPrefix:''
  };
  new Dialogify('book/add_data_form.php', options)
   .title('Information')
   .buttons([
    {
     text:'Login',
	 type:Dialogify.BUTTON_PRIMARY,
     click:function(e){
    //  this.close();
     }
    },
    {
     text:'Registration',
     type:Dialogify.BUTTON_DANGER,
     click:function(e)
     {
		 
		 //alert("For Insert");
 
     }
    }
   ]).showModal();
 });*/
 
 
 $(document).on('click', '.view', function(){
  new Dialogify('add_data_form.ph', options)
   .title('View Room Details')
   .showModal();
 });


});
</script>