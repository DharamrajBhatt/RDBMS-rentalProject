
<?php
  include 'connection.php';        
if ($con->connect_error) 
{
  die("Connection failed: " . $con->connect_error);
}
//server side validation
$found=0;
$nm =$_POST['fname'];
$add =$_POST['address'];
$gen =$_POST['gender'];
$mob =$_POST['mob_no'];
$age =$_POST['age'];
$mail =$_POST['mail'];
$user_type =$_POST['u_type'];
$user =$_POST['userid'];
$pwd =$_POST['password'];
$date = date("Y-m-d");
$pro_pic= addslashes(file_get_contents($_FILES['profile_pic']['tmp_name']));
$sql = "select * from registration";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
	 //checking the three parameter(if it already exists) for userid, mobile and email
   if($mail == $row["Email"])
   {
	   $found=1;
	   break;
   }
   else if($mob == $row["Contact"])
   {
	   $found=2;
	   break;
   }
   else if($user == $row["User_id"])
   {
	   $found=3;
	   break;
   }
   }
    if($found == 1)
	{
		echo "<script>alert('Email id already exists !!')</script>";
		echo "<script>window.location.href='registration.php';</script>";
	}
	else if($found == 2)
	{
		echo "<script>alert('Mobile No Already Exists !!')</script>";
		echo "<script>window.location.href='registration.php';</script>";
	}
	else if($found == 3)
	{
		echo "<script>alert('User Id Already  Exists!! Try with new')</script>";
		echo "<script>window.location.href='registration.php';</script>";
	}
	else
	{
		//code for insertion to be written if all the validation has been passed
		$sql1="insert into registration values('$nm','$add','$gen',$mob,$age,'$mail','$user_type','$user','$pwd','$date','$pro_pic')";
		if ($con->query($sql1) === TRUE)
		{
		echo "<script>alert('Congratulation on Registering With Rentiment Interface')</script>";
		echo "<script>window.location.href='login.php';</script>";
		}
		else 
		{
		  echo "<script>alert('There was some error while inserting data')</script>";
		}
	}
} 
else 
{
  echo "<script>alert('Data not Available in the database !!')</script>";
}
$con->close();
?>

		