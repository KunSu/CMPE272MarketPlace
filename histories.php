<?php
session_start();

// check session
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || !isset($_SESSION["id"])){
    header("location: login.php");
    exit;
}
require_once "config.php";

$userid = $SESSION["id"];

// process post request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $post = json_decode(file_get_contents('php://input'), true);
  $item = $post["item"];
  $sql = "INSERT into histories(userid, item, created_at) VALUE (".$userid.",'".$item."', NOW())";
  if ($db_connection->query($sql) === TRUE) {
    echo "";
  } else {
    echo $db_connection->error;
  }
  return;
}

//process get request
$sql = "SELECT DISTINCT(item), UNIX_TIMESTAMP(created_at) as created FROM histories where userid = ".$userid." ORDER BY created DESC";
$histories = array();
$result = $db_connection->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      array_push($histories, $row["item"]);
    }
}
$ret = new stdClass();
$ret->histories = $histories;
echo json_encode($ret);
?>
