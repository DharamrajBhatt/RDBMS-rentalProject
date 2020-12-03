<?php
session_start();
$uid=$_SESSION['uid'];
?>
<?php
include 'connection.php';        
if ($con->connect_error) 
{
  die("Connection failed: " . $con->connect_error);
}

$sql = "select * from building where User_id='$uid'";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
    //fetch the result and store it in the variable
    $_SESSION['bid']=$row["Building_id"];  
	$_SESSION['bname']=$row["B_Name"];
	$_SESSION['add']=$row["Address"];  
	$_SESSION['n_room']=$row["No_of_rooms"];
  }
  echo "<script>window.location.href='view_building_new.php';</script>";
} 
else 
{
  echo "0 results";
}
$con->close();
?>