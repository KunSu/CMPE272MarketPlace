<?php
    require_once "config.php";
    $productID_sql = "SELECT id FROM product WHERE name = '$include_name'";
    $productID_query = mysqli_query($db_connection, $productID_sql);
    $productID_query = mysqli_fetch_array($productID_query);
    $productID = $productID_query['id'];

    $sql = "SELECT * FROM productreviews WHERE productID = '$productID' ORDER BY created_at DESC";
    $result = mysqli_query($db_connection, $sql);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>

        <table class="table">
            <tbody>
            <?php

                if ($result->num_rows === 0){
                  echo "<h1>There is no comment</h1>";
                }
                else{
                  echo "<h1>Comment Section</h1>";
                  echo "<thead>";
                  echo "<tr>";
                  echo "<th scope=\"col\">user:</th>";
                  echo "<th scope=\"col\">created_at:</th>";
                  echo "<th scope=\"col\">rating:</th>";
                  echo "<th scope=\"col\">review:</th>";
                  echo "</tr>";
                  echo" </thead>";
                }

                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo '<td style="text-align:center;">' . $row['userName'] . '</td>';
                    echo '<td style="text-align:center;">' . $row['created_at'] . "</td>";
                    echo '<td style="text-align:center;">' . $row['rating'] . "</td>";
                    if(strlen($row['review']) > 100)
                      echo '<td style="text-align:center;">' . substr($row['review'], 0, 100) . " ...</td>";
                    else
                      echo '<td style="text-align:center;">' . $row['review'] . "</td>";


                    echo "</tr>";
                }
                mysqli_close($db_connection);
            ?>
            </tbody>
        </table>

    </body>
</html>
