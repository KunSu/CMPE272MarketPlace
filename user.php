<?php
// Reference: https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php

// Include config file
require_once "config.php";

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

function get_user_list($db_connection, $name) {

    $url = "http://kunsu.us/MarketPlace/getUser.php";
    $cURL = curl_init();
    
    curl_setopt($cURL, CURLOPT_URL, $url);
    curl_setopt($cURL, CURLOPT_RETURNTRANSFER, 1);
    $json = curl_exec($cURL);
    curl_close($cURL);

    $json = json_decode($json, true);
    return $json;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users for all companies</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/kunsu.css">
</head>
<body>
    <div class="page-header">
        <h1>Welcome to the users page.</h1>
    </div>
    <br>

    <div class="container user">
         <div class="row">
            
            <div class="col col-md">
                <p>Kun's Company</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">UserName:</th>
                            <th scope="col">Email:</th>
                            <th scope="col">Phone:</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                        $result = get_user_list($db_connection, "Kun");
                        foreach ($result as $key => $value)
                        {
                            echo "<tr>";
                            echo "<td>" . $value['username'] . "</td>";
                            echo "<td>" . $value['email'] . "</td>";
                            echo "<td>" . $value['homephone'] . "</td>";
                            echo "</tr>";
                        } 
                    ?>
                    </tbody>
                </table>
            </div>
            
            <!-- <div class="col-6 col-md-4">
                <p>Taylor's Company</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">UserName:</th>
                            <th scope="col">Email:</th>
                            <th scope="col">Phone:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $result = get_user_list($db_connection, "Taylor");

                            foreach ($result as $key => $value)
                            {
                                echo "<tr>";

                                echo "<td>" . $value['username'] . "</td>";
                                echo "<td>" . $value['email'] . "</td>";
                                echo "<td>" . $value['homephone'] . "</td>";
                                echo "</tr>";
                            } 
                        ?>
                    </tbody>
                </table>
            </div>
            
            <div class="col-6 col-md-4">
                <p>Ru's Company</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">UserName:</th>
                            <th scope="col">Email:</th>
                            <th scope="col">Phone:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $result = get_user_list($db_connection, "Ru");

                            foreach ($result as $key => $value)
                            {
                                echo "<tr>";

                                echo "<td>" . $value['username'] . "</td>";
                                echo "<td>" . $value['email'] . "</td>";
                                echo "<td>" . $value['homephone'] . "</td>";
                                echo "</tr>";
                            } 
                        ?>
                    </tbody>
                </table>
            </div> -->
        </div>
    </div>

    <br>
    <p>
        <a href="index.php" class="btn btn-primary">Home Page</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>

<?php mysqli_close($db_connection); ?>