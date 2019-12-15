<?php 

$path = "../../";

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../login.php");
    exit;
}

require_once "updateLastFiveHeader.php";
?>
<head>
    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Portfolio - Puremedia</title>
    <meta name="description" content="">  
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo $path;?>css/base.css">
    <link rel="stylesheet" href="<?php echo $path;?>css/main.css">
    <link rel="stylesheet" href="<?php echo $path;?>css/media-queries.css"> 
    <link rel="stylesheet" href="<?php echo $path;?>css/kunsu.css">      

    <!-- Script
    =================================================== -->
    <script src="js/modernizr.js"></script>

    <!-- Favicons
    =================================================== -->
    <link rel="shortcut icon" href="<?php echo $path;?>favicon.png">
</head>