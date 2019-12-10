<?php
    require_once "config.php";
    $productID_sql = "SELECT id FROM product WHERE name = '$include_name'";
    $productID_query = mysqli_query($db_connection, $productID_sql);
    $productID_query = mysqli_fetch_array($productID_query);
    $productID = $productID_query['id'];

    $sql = "SELECT * FROM productreviews WHERE productID = '$productID'";
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
