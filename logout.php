<?php
// Reference: https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php

// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();
setcookie("userID", 0, time());
// Destroy the session.
session_destroy();

// Redirect to login page
header("location: index.php");
exit;
?>