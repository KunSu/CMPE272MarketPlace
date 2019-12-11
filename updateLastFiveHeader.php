<?php
session_start();

if (!isset($_SESSION["id"])) {
return;
}

$userid = $_SESSION["id"];
$item = $_SERVER["REQUEST_URI"];

require_once "config.php";

$sql = "INSERT into histories(userid, item, created_at) VALUE (".$userid.",'".$item."', NOW())";

if ($db_connection->query($sql) !== TRUE) {
  echo $db_connection->error;
}

?>