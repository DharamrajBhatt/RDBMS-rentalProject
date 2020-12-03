<?php
session_start();
include("connection.php");
$uid=$_SESSION['uid'];
$sql = "select * from registration where User_id = '$uid'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  //function will return 1 if it succeed in finding the data
        if($count > 0)
        {
			$_SESSION['name']=$row['Name'];
			$_SESSION['add']=$row['Address'];
			$_SESSION['gen']=$row['Gender'];
			$_SESSION['con']=$row['Contact'];
			$_SESSION['age']=$row['Age'];
			$_SESSION['mail']=$row['Email'];
			$_SESSION['utype']=$row['User_Type'];
			$_SESSION['uid']=$row['User_id'];
			$_SESSION['rdate']=$row['Reg_date'];
			$_SESSION['pic']='<img src="data:image;base64,'.base64_encode($row['Pro_pic']).'">';
		    echo "<script>window.location.href='User_edit_profile.php'</script>";
        }  
?>