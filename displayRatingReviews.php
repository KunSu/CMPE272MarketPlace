<?php
    require_once "config.php";
    $productID_sql = "SELECT id FROM product WHERE name = '$include_name'";
    $productID_query = mysqli_query($db_connection, $productID_sql);
    $productID_query = mysqli_fetch_array($productID_query);
    $productID = $productID_query['id'];

    $sql = "SELECT * FROM productreviews WHERE productID = '$productID' ORDER BY created_at DESC";
    $result = mysqli_query($db_connection, $sql);

    echo "Mostly commented 5 products<br>";
    $mostCommentProduct_sql = "SELECT productID, COUNT(*) AS MAGNITUDE FROM productreviews GROUP BY PRODUCTID ORDER BY MAGNITUDE DESC LIMIT 5";
    $MOSTCOMMENTPRODUCT_query = mysqli_query($db_connection, $mostCommentProduct_sql);
    while($row = mysqli_fetch_array($MOSTCOMMENTPRODUCT_query)){
      $productID = $row['productID'];
      $productName_sql = "SELECT name FROM product WHERE id = $productID";
      $productName_query = mysqli_query($db_connection, $productName_sql);
      $productName_query = mysqli_fetch_array($productName_query);
      echo $productName_query['name']. "<br>";
    }

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
                  echo "<h1>There is no comment for this product</h1>";
                }
                else{
                  echo "<h1>Comment Section</h1>";
                  echo "<thead>";
                  echo "<tr>";
                  echo "<th scope=\"col\">user:</th>";
                  echo "<th scope=\"col\">created_at:</th>";
                  echo "<th scope=\"col\">rating:</th>";
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
                      echo "<tr><td colspan='5' style='text-align:center;'>". substr($row['review'], 0, 100) . " ...</td></tr>";
                    else
                      echo "<tr><td colspan='5' style='text-align:center;'>" . $row['review'] . "</td></tr>";
                    echo "</tr>";
                }
                mysqli_close($db_connection);
            ?>
            </tbody>
        </table>

    </body>
</html>
