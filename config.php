<?php
$con = mysqli_connect("localhost","root", "alen.grace@123", "home_rental");

if(mysqli_connect_errno()){
  echo "failed to connet to the database" . mysqli_connect_errno();
}
?>
