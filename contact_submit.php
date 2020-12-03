<?php
    include "connection.php";
    $nm =$_POST['name'];
    $em =$_POST['email'];
    $mess =$_POST['message'];
    

if ($con->connect_error) 
	{
    die("Connection failed: " .$con->connect_error);
    }
	
	$sql="INSERT INTO message(name,email,message) values('$nm','$em','$mess')";
    if ($con->query($sql) === TRUE)
    {
		echo "<script>alert('Thank you for your response !!!')</script>";
		echo "<script>window.location.href='contact.php';</script>";
	} 
	else 
	{
	echo "Error: " . $sql . "<br>" . $con->error;
	}
    $con->close();