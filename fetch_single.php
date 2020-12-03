<?php
session_start();
?>
<?php

//fetch_single.php(POPUP)

include('database_connection.php');

if(isset($_GET["id"]))
{
 $query = "SELECT b.B_Name ,b.Address,r.Room_id,r.Room_no,r.Room_type,r.Rent_Amt,r.Floor,o.Name,o.Contact,o.Email  
      FROM building AS b  
     JOIN room AS r 
     ON b.Building_id=r.Building_id
     JOIN registration AS o  
    ON o.User_id = b.User_id;
    where r.Room_id='".$_GET["id"]."'";
 //echo $_GET["id"];
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '<div class="row">';
 foreach($result as $row)
 {
  if($_GET["id"] == $row["Room_id"])
  {
    
   
  $images = '<img src="https://www.gravatar.com/avatar/38ed5967302ec60ff4417826c24feef6?s=80&d=mm&r=g" class="img-responsive img-thumbnail" />';
  $output .= '
  <div class="col-md-3">
   <br />
   '.$images.'
  </div>
  <div class="col-md-9">
   <br />
   <p><label>Room Id :&nbsp;</label>'.$_SESSION['rid']=$row["Room_id"].'</p>
   <p><label>Building Name :&nbsp;</label>'.$_SESSION['BName']=$row["B_Name"].'</p>
   <p><label>Address :&nbsp;</label>'.$_SESSION['add']=$row["Address"].'</p>
   <p><label>Room No :&nbsp;</label>'.$_SESSION['rno']=$row["Room_no"].'</p>
   <p><label>Room Type :&nbsp;</label>'.$_SESSION['rtype']=$row["Room_type"].'</p>
   <p><label>Rent Amount :&nbsp;</label>'.$_SESSION['rent']=$row["Rent_Amt"].'</p>
    <p><label>Floor :&nbsp;</label>'.$_SESSION['floor']=$row["Floor"].'</p>
   <p><label>Owner Name :&nbsp;</label>'.$_SESSION['name']=$row["Name"].'</p>
   <p><label>Contact :&nbsp;</label>'.$_SESSION['con']=$row["Contact"].'</p>
   <p><label>Email Id :&nbsp;</label>'.$_SESSION['mail']=$row["Email"].'</p>
  </div>
  </div><br />
  ';
  break;
 }
 }
 echo $output;
 //echo $_SESSION['rid'];
}

?>
