<?php
session_start();
$uid=$_SESSION['uid'];
?>
<?php
    include 'connection.php';
	$rid =$_POST['room_id'];
    $r_type =$_POST['r_type'];
	$bname=$_POST['b_name'];
    $floor =$_POST['floor'];
    $door_face =$_POST['door_face'];
    $rno =$_POST['r_no'];
	$status=$_POST['status'];
	$rent=$_POST['room_rent'];
	if ($con->connect_error)
	{
    die("Connection failed: " .$con->connect_error);
    }

    $sql2 = "select * from room";
    $result1 = $con->query($sql2);
    if ($result1->num_rows > 0)
    {
      // output data of each row
      $found=0;
      while($row = $result1->fetch_assoc())
      {
    	 //checking the three parameter(if it already exists) for userid, mobile and email
       if($rid == $row["Room_id"])
       {
    	   $found=1;
    	   break;
       }
    }
    if($found == 1)
    	{
    		echo "<script>alert('Room ID Already Exists :( Try diiferent Id!')</script>";
    		echo "<script>window.location.href='Owner_room_new.php';</script>";
    	}
    else 
	{
	$sql1="select Building_id from Building where B_Name='$bname' and User_id='$uid'";
	
	$result = $con->query($sql1);
   if ($result->num_rows > 0) 
    {
  // output data of each row
       while($row = $result->fetch_assoc()) 
  {
    $bid=$row['Building_id'];
  }
  
  	 if(isset($_POST['room']))
	{
        $name = $_FILES['room_pic']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["room_pic"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['room_pic']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

            // Insert record
            $sql = "insert into room values('$rid','$r_type','$bname',$floor,'$door_face',$rno,'$status','$name','$image',$rent,'$bid')";
            if ($con->query($sql) === TRUE)
            {
				    move_uploaded_file($_FILES['room_pic']['tmp_name'],'upload/'.$name);
					echo "<script>alert('Room Added Successfully')</script>";
		            echo "<script>window.location.href='Owner_room_new.php';</script>";
	        } 
	        else 
			{
					echo "Error: " . $sql . "<br>" . $con->error;
			}          
        }
   
    }
  
} 
  $con->close();
    }

}
?>