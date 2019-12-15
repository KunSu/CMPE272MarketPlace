<?php

if (!isset($_SESSION["id"])) {
return;
}

$userid = $_SESSION["id"];
$item = $_SERVER["REQUEST_URI"];

require_once "config.php";

$sql = "INSERT into histories(userid, item, company,created_at) VALUE (".$userid.",'".getName($item)."','".getCompany($item)."', NOW())";

if ($db_connection->query($sql) !== TRUE) {
  echo $db_connection->error;
}


function getCompany($path) {
  $len = strpos($path, "/", 11);
  return rawurldecode(substr($path, 11, $len-11));
}

function getName($path) {
  $start = strpos($path,"/",11);
  return rawurldecode(substr($path, $start+1, -4));
}
?>