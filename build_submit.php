<?php
session_start();
?>
<?php
/*
    include 'connection.php';
	$bid =$_POST['b_id'];
	//$_SESSION['build_id']=$bid;
    $bname =$_POST['bname'];
    $add =$_POST['address'];
    $no_rooms =$_POST['room_no'];
	$uid=$_SESSION['uid'];
	if ($con->connect_error) 
	{
    die("Connection failed: " .$con->connect_error);
    }
	if(isset($_POST['submit']))
	{
        $name = $_FILES['build_pic']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["build_pic"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['build_pic']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

            // Insert record
            $sql = "insert into building values('$bid','$bname','$add',$no_rooms,'$name','$image','$uid')";
            if ($con->query($sql) === TRUE)
            {
				    move_uploaded_file($_FILES['build_pic']['tmp_name'],'upload/'.$name);
					echo "<script>alert('Building Added Successfully !1')</script>";
					echo "<script>window.location.href='view_building_new.php';</script>";
	        } 
	        else 
			{
					echo "Error: " . $sql . "<br>" . $con->error;
			}
			$con->close();            
        }
   
    }*/
	
    include 'connection.php';
	$bid =$_POST['b_id'];
	$_SESSION['build_id']=$bid;
    $bname =$_POST['bname'];
    $add =$_POST['address'];
    $no_rooms =$_POST['room_no'];
	$uid=$_SESSION['uid'];
	//$build_pic=addslashes(file_get_contents($_FILES['build_pic']['tmp_name']));
	if ($con->connect_error)
	{
    die("Connection failed: " .$con->connect_error);
    }

    $sql2 = "select * from building";
    $result = $con->query($sql2);
    if ($result->num_rows > 0)
    {
      // output data of each row
      $found=0;
      while($row = $result->fetch_assoc())
      {
    	 //checking the three parameter(if it already exists) for userid, mobile and email
       if($bid == $row["Building_id"])
       {
    	   $found=1;
    	   break;
       }
    }
    if($found == 1)
    	{
    		echo "<script>alert('Buillding ID Already Exists :( Try diiferent Id!')</script>";
    		echo "<script>window.location.href='Owner_building_new.php';</script>";
    	}
    else 
	{
              
       if(isset($_POST['submit']))
	{
        $name = $_FILES['build_pic']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["build_pic"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['build_pic']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

            // Insert record
            $sql = "insert into building values('$bid','$bname','$add',$no_rooms,'$name','$image','$uid')";
            if ($con->query($sql) === TRUE)
            {
				    move_uploaded_file($_FILES['build_pic']['tmp_name'],'upload/'.$name);
					echo "<script>alert('Building Added Successfully !1')</script>";
					echo "<script>window.location.href='view_building_new.php';</script>";
	        } 
	        else 
			{
					echo "Error: " . $sql . "<br>" . $con->error;
			}
			$con->close();            
        }
   
    }
    }

}
?>