<?php
session_start();
$user=$_SESSION['uid'];
?>
<?php
//fetch_single.php(POPUP)

//include('database_connection.php');
$rid=$_GET["id"];
include 'connection.php';        
if ($con->connect_error) 
{
  die("Connection failed: " . $con->connect_error);
}
if(isset($_GET["id"]))
{
 $sql = "INSERT INTO deal(`User_id`,`Room_id`) values('$user','$rid')";
 	if ($con->query($sql) === TRUE)
		{
	      $sql1="INSERT INTO book_user 
                SELECT u.User_id,u.Name,u.Contact,u.Email,b.Building_id,b.B_Name,r.Room_id,
                r.Room_no,r.Room_type, CURRENT_DATE FROM room r JOIN registration u JOIN deal d 
                JOIN building b where (d.User_id =u.User_id AND d.Room_id=r.Room_id) AND 
			    b.Building_id=r.Building_id and d.Room_id not in(select Room_id from book_user)";
		
		  
			if ($con->query($sql1) === TRUE)
			{
			  $data="UPDATE room SET Status='not available' WHERE Room_id='$rid'";
              mysqli_query($con,$data);
		      //$sql2="UPDATE room r join deal d SET r.Status='not available' WHERE r.Room_id=d.Room_id";
			  //echo "<script>alert('Updated !!')</script>";
            }
		}
		else 
		{
		  echo "<script>alert('This Room is Already Booked !!')</script>";
		  //echo $rid;
		}
		}
$con->close();
?>
