<?php
    include("includes/config.php");

    include("includes/classes/admin-Account.php");
    include("includes/classes/Constants.php");

    $account = new Account($con);

    if(isset($_SESSION['userLoggedIn'])) {
        // echo "<h1> hi, its set</h1>";
        $userLoggedIn = $_SESSION['userLoggedIn'];
    }
    else {
        header("Location: admin-login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <!-- <meta name="keywords" content="HTML5 Template" /> -->
    <meta name="description" content="Jobber - Job Portal" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RentiMent || The home you deserve</title>

    <!-- Favicon -->
    <link href="images/logo2.png" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

    <!-- map -->
    <link rel="stylesheet" href="css/apexcharts/apexcharts.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>

<!--=================================
Dashboard Nav -->
<?php include("admin-navigation.php"); ?>
<!--=================================
Dashboard Nav -->
