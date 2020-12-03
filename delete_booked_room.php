<?php
session_start();
$uid=$_SESSION['uid'];
?>
<?php  
 $connect = mysqli_connect("localhost", "root", "alen.grace@123", "home_rental");   
 $tables = array("book_user","deal");
 foreach($tables as $table) {
  $query = "DELETE FROM $table WHERE Room_id='".$_POST["id"]."'";
  mysqli_query($connect,$query);
}
 ?>