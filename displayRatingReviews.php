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
        <h1>Comment Section</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">userID:</th>
                    <th scope="col">created_at:</th>
                    <th scope="col">rating:</th>
                    <th scope="col">review:</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo '<td style="text-align:center;">' . $row['userID'] . '</td>';
                    echo '<td style="text-align:center;">' . $row['created_at'] . "</td>";
                    echo '<td style="text-align:center;">' . $row['rating'] . "</td>";
                    echo '<td style="text-align:center;">' . $row['review'] . "</td>";
                    echo "</tr>";
                }
                mysqli_close($db_connection);
            ?>

            </tbody>
        </table>

    </body>
</html>
