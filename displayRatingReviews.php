<?php
    // Reference: https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php

    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    //check if the user is already logged in, if no then redirect him to login page

    // if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    //     header("location: login.php");
    //     exit;
    // }

    require_once "config.php";

    $sql = "SELECT * FROM productreviews";
    $result = mysqli_query($db_connection, $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID:</th>
                    <th scope="col">productID:</th>
                    <th scope="col">userID:</th>
                    <th scope="col">rating:</th>
                    <th scope="col">review:</th>
                    <th scope="col">created_at:</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $index = 1;
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    // echo "<th scope=\"row\">" . $index++ . "</th>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['productID'] . "</td>";
                    echo "<td>" . $row['userID'] . "</td>";
                    echo "<td>" . $row['rating'] . "</td>";
                    echo "<td>" . $row['review'] . "</td>";
                    echo "<td>" . $row['created_at'] . "</td>";
                    echo "</tr>";
                }  
            ?>

            </tbody>
        </table>
        
    </body>
</html>