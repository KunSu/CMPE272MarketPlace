<?php
// Include config file
require_once "config.php";

// process get request
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $sql = "SELECT username, email, homephone FROM users";
    $sth = mysqli_query($db_connection, $sql);
    $result = array();
    while($r = mysqli_fetch_assoc($sth)) {
        $result[] = $r;
    }
    $json = json_encode($result, true);
    echo ($json);
}

?>
