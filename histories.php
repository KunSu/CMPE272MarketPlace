<?php
session_start();

// check session
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || !isset($_SESSION["id"])){
    header("location: login.php");
    exit;
}
require_once "config.php";

$userid = $_SESSION["id"];

//get last 5
$sql = "SELECT item, max(created_at) FROM histories where userid = ".$userid." GROUP BY item ORDER BY max(created_at) DESC LIMIT 5";

$histories = array();
$result = $db_connection->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div><a href=\"".$row["item"]."\">".getName($row["item"])."</a></div>";
    }
}

function getName($path) {
  $start = strpos($path,"/",11);
  return rawurldecode(substr($path, $start+1, -4));
}
?>
