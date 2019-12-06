<?php
// Reference: https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php

// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: admin.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$error = false;
 
function displayError($msg) {
    echo "
    <div class=\"alert alert-danger\" role=\"alert\">
        $msg
    </div>
    ";
}

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    $username = trim($_POST["username"]);
    // Check if username is empty
    if(empty($username)){
        $error = true;
        displayError("Please enter username.");
    } 
    
    $password = trim($_POST["password"]);
    // Check if password is empty
    if(empty($password)) {
        $error = true;
        displayError("Please enter your password.");
    } 
    
    // Validate credentials
    if(!$error){
        $stmt = $db_connection -> prepare('SELECT id, username, password FROM users WHERE username = ?');

        if (
            $stmt &&
            $stmt -> bind_param('s', $username) &&
            $stmt -> execute() &&
            $stmt -> store_result() &&
            $stmt -> bind_result($id, $username, $hashed_password)
        ) {
            if(mysqli_stmt_num_rows($stmt) == 1){
                if(mysqli_stmt_fetch($stmt)){
                    if(md5($password) == $hashed_password) {
                        // Password is correct, so start a new session
                        session_start();
                                                
                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["username"] = $username;                            
                        
                        // Redirect user to welcome page
                        header("location: admin.php");
                    } else{
                        displayError("The password you entered was not valid.");
                    }
                }
            } else{
                displayError("No account found with that username.");
            }
        } else {
            displayError("Oops! Something went wrong. Please try again later.");
        }

        // Close statement
        // mysqli_stmt_close($stmt);
    }
    
    // // Close connection
    // mysqli_close($db_connection);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/kunsu.css">

    <!--- Google Signin 
    ================================================== -->
    <meta name="google-signin-scope" content="kun.su@sjsu.edu">
    <meta name="google-signin-client_id" content="952421082077-klm8vpagvi5bkh87ojq3c48o4j0optof.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <br>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="Username">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="register.php" class="btn btn-primary">Sign Up</a>
            <a href="index.php" class="btn btn-danger">Home Page</a>
        </form>
    </div>

    <div style="display: inline-block; margin-top: 30px;">
        <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    </div>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
    </script>    
    
</body>
</html>

