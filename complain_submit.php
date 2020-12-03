<?php
include 'connection.php';
$uname=$_POST['user_id'];
$bname=$_POST['b_name'];
$rno=$_POST['rno'];
$message= $_POST['message'];
//$comp_pic= addslashes(file_get_contents($_FILES['image']['tmp_name']));
if ($con->connect_error) 
	{
    die("Connection failed: " .$con->connect_error);
    }
	 if(isset($_POST['filed']))
	{
        $name = $_FILES['image']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['image']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

            // Insert record
            $sql = "insert into complaint(`User_id`,`B_Name`,`Room_no`,`Complaint_Message`,`name`,`photo`) values('$uname','$bname','$rno','$message','$name','$image')";
            if ($con->query($sql) === TRUE)
            {
				    move_uploaded_file($_FILES['image']['tmp_name'],'upload/'.$name);
					echo "<script>alert('Complaint Recored Successfully !!')</script>";
					echo "<script>window.location.href='User_panel_new.php';</script>";
	        } 
	        else 
			{
					echo "Error: " . $sql . "<br>" . $con->error;
			}
			$con->close();            
        }
   
    }
	
	
	/*
	
	$sql="insert into complaint(`User_id`,`Building_id`,`Room_no`,`Complaint_Message`,`Photo`)values('$uname','$bname','$rno','$message','$comp_pic')";
    if ($con->query($sql) === TRUE)
    {
		echo "<script>alert('Complaint Recored Successfully !!')</script>";
		echo "<script>window.location.href='User_panel_new.php';</script>";
	} 
	else 
	{
	echo "Error: " . $sql . "<br>" . $con->error;
	}
    $con->close();*/
?>