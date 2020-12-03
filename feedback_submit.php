<?php

    include 'connection.php';

    $name =$_POST['name'];
    $msg=$_POST['message'];
	$date = date("Y-m-d");
	if ($con->connect_error) 
	{
    die("Connection failed: " .$con->connect_error);
    }
	
	$sql="insert into feedback values('$name','$date','$msg')";
    if ($con->query($sql) === TRUE)
    {
		echo "<script>alert('Thank you for your response !!!')</script>";
		echo "<script>window.location.href='feedback.php';</script>";
	} 
	else 
	{
	echo "Error: " . $sql . "<br>" . $con->error;
	}
    $con->close();
	?>