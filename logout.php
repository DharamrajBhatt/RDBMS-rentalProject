<?php		
session_start();
//clears the values once the user comes of the page by logging out	
unset($_SESSION['name']);
unset($_SESSION['add']);
unset($_SESSION['gen']);
unset($_SESSION['con']);
unset($_SESSION['age']);
unset($_SESSION['mail']);
unset($_SESSION['utype']);
unset($_SESSION['uid']);
unset($_SESSION['rdate']);
unset($_SESSION['pic']);
session_destroy();  // this function will destroy the 
echo "<script>window.location.href='login.php';</script>";
?>