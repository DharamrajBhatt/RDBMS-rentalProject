 <html>
 <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
 </head>
 <body>
 <div class="apartment_part">
      <div class="container">
         <div class="row justify-content-between align-content-center">
            <div class="col-md-8 col-lg-7">
               <div class="section_tittle">
               </div>
            </div>
         </div>
		 <?php
$connect = mysqli_connect("localhost", "root", "alen.grace@123", "home_rental");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "SELECT p.Address,p.B_Name,c1.Rent_Amt,c1.Room_pic  
           FROM building AS p  
           JOIN room AS c1
           ON p.Building_id=c1.Building_id
           WHERE p.B_Name LIKE '%".$search."%'
           OR p.Address LIKE '%".$search."%' 
 ";
 
 
}
else
{
 $query = "
  SELECT p.Address,p.B_Name,c1.Rent_Amt,c1.Room_pic  
FROM building AS p  
JOIN room AS c1
ON p.Building_id=c1.Building_id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   echo '          <div class="row">
		 
            <div class="col-md-4 col-lg-4">
               <div class="single_appartment_part">
                  <div class="appartment_img">
  
                 <img src="data:image;base64,'.base64_encode($row['Room_pic']).'">
	  
	  
	 
	                     <div class="single_appartment_text">
                        <h3>&#x20B9;'.$row["Rent_Amt"].'</h3>'.
                        '<p><span class="ti-location-pin"></span>'.$row["Address"].'</p>
                     </div>
					 
			           
                 </div>
				  
                  <div class="single_appartment_content">
                     <a href="" class="love_us"> <span class="ti-heart"></span> </a>
                     <p>'.$row["B_Name"].'</p>
				     </h4><button type="button" name="view" class="btn btn-primary btn-xs">View Details &#128269;</button></h4>
					</div>
               </div>
            </div>
			</div>';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
?>
</div>
</div>
</body>
</html>

