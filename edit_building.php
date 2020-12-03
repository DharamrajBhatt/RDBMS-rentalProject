<?php  
 $connect = mysqli_connect("localhost", "root", "alen.grace@123", "home_rental");  
 $id = $_POST["id"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE building SET ".$column_name."='".$text."' WHERE Building_id='".$id."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Updated';  
 }  
 ?>