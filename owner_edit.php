<?php
session_start();
include("connection.php");
$upd_name=$_POST['name'];
//$upd_gen=$_POST['gender'];
//$upd_age=$_POST['age'];
$upd_add=$_POST['address'];
$upd_mail=$_POST['mail'];
$upd_cont=$_POST['contact'];
$uid=$_SESSION['uid'];
//$img=$_SESSION['pic'];
$img=addslashes(file_get_contents($_FILES['img']['tmp_name']));
$sql = "update registration set Name='$upd_name',Address='$upd_add',Email='$upd_mail',Contact='$upd_cont',Pro_pic='$img' where User_id='$uid'";
if(mysqli_query($con, $sql))
{
	echo "<script>alert('Changes Done Successfully!!!')</script>";
    echo "<script>window.location.href='data_load.php'</script>";
} 
else 
{
   echo "<script>alert('There was some error in doing updation!')</script>";
}
 
// Close connection
mysqli_close($con);
?>