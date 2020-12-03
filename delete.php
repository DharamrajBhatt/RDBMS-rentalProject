<?php
session_start();
$uid=$_SESSION['uid'];
?>
<?php  
 $connect = mysqli_connect("localhost", "root", "alen.grace@123", "home_rental");  
 $sql = "delete from building WHERE Building_id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>