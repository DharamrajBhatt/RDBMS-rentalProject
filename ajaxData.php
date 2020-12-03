<?php
include('dbConfig.php');
$bname=$_POST["country_id"];
if(isset($bname) && !empty($bname))
{
    $query = $db->query("SELECT * FROM book_user WHERE B_Name ='$bname'");
    $rowCount = $query->num_rows;
    if($rowCount > 0)
	{
        echo '<option value="">Now Select Room No</option>';
        while($row = $query->fetch_assoc())
		{ 
            echo '<option value="'.$row['Room_no'].'">'.$row['Room_no'].'</option>';
        }
    }
	else
	{
        echo '<option value="">State not available</option>';
    }
}
?>