<?php
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'dev');
 define('DB_PASSWORD', '123456');
 define('DB_NAME', 'market_place');

 
function update_view_count_productDB($product_name) {
     
    /* Attempt to connect to MySQL database */
    $db_connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Check connection
    if($db_connection === false){
        die("ERROR: Could not connect to the Database." . mysqli_connect_error());
    }
    
    if(!isset($_COOKIE["product_view_count"])) {
        echo "Cookie is not set.";
        $result = "UPDATE product SET visitedCount = 0 WHERE name = '$product_name'";
    }else {        
        $result = "UPDATE product SET visitedCount = visitedCount + 1 WHERE name = '$product_name' ";
    }

    if (mysqli_query($db_connection, $result)) {
        //Testing purpose
        //echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($db_connection);
    }
    
    mysqli_close($db_connection);
}

function get_top_five(){
    $path = "../";
    $db_connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if(isset($_COOKIE["product_view_count"])) {

        $result = mysqli_query($db_connection,"SELECT name, visitedCount, companyName FROM product WHERE visitedCount > 0 ORDER BY visitedCount DESC");
        //echo '<aside class="product">';
        //echo "<p>Last five most visited pages from all</p>";
        $index = 0;
        for ($index = 0; $index <5; $index++) {
            if (($query_data = mysqli_fetch_array($result))){
                $url = str_replace(' ', '%20', $query_data['name']);
                echo "<br><a href=" . $path . $query_data['companyName']."/" . $url . ".php>" . $query_data['name'] . ": " . $query_data['visitedCount'] . " views</a><br>";
            }
        }
        //echo "</aside>";
    }
    
    mysqli_close($db_connection);

}


?>