<?php
session_start();
?>
<html> 
<head>
<link rel="stylesheet" href="css/style.css">
</head>
 <body>
 <div class="apartment_part search-apt-img">
      <div class="container">
         <div class="row justify-content-between align-content-center">
            <div class="col-md-8 col-lg-7">
               <div class="section_tittle">
               </div>
            </div>
         </div>
		 
		 
<div class="row">
<?php
$connect = mysqli_connect("localhost", "root", "alen.grace@123", "home_rental");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "SELECT p.Address,p.B_Name,c1.Room_id,c1.Rent_Amt,c1.Room_pic  
           FROM building AS p  
           JOIN room AS c1
           ON p.Building_id=c1.Building_id 
		   AND c1.Status='available'
           WHERE p.B_Name LIKE '%".$search."%'
           OR p.Address LIKE '%".$search."%'";
}
else
{
 $query = "SELECT p.Address,p.B_Name,c1.Room_id,c1.Rent_Amt,c1.Room_pic  
           FROM building AS p JOIN room AS c1
           ON p.Building_id=c1.Building_id AND c1.Status='available'";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   echo "         
		 
            <div class='col-md-4 col-lg-4'>
               <div class='single_appartment_part'>
                  <div class='appartment_img'>"."
  
                 
	                    
						<img src='{$row['Room_pic']}'>".
	 
	                    " <div class='single_appartment_text'>"
                        ."<h3>&#x20B9;".$row["Rent_Amt"]."</h3>".
                        "<p><span class='ti-location-pin'></span>".$row["Address"]."</p>
                     </div>".
					 
					 
		
                   
                " </div>
				  
                  <div class='single_appartment_content'>
                    
                     <center><p style='font-size:16px; font-weight: 600;'>".$row["B_Name"]."</p>";
					   if(empty($_SESSION['uid']) || $_SESSION['uid']== '')
                       {
                        echo '<h4><button type="button" class="btn btn_not_user view-detail-btn">View Details &#128269;</button></h4>';
                       }
						else
						{
						 echo '<h4><button type="button" id="'.$row["Room_id"].'" class="btn view-detail-btn btn_user">View Details &#128269;</button></h4>';
						 echo '<h4><button type="button" id="'.$row["Room_id"].'" class="btn view-detail-btn book">Book</button></h4>';
	
						}
				echo	 "</div></center>
               </div>
			</div>";
 }
 echo $output;
}
else
{
	echo '<p class="no-data-found"><i class="fa fa-frown"></i> Data Not Found</p>';
}
?>
</div>
</div>
</div>
</body>
</html>


