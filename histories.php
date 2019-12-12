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
$sql = "SELECT item,company, max(created_at) FROM histories where userid = ".$userid." GROUP BY item, company ORDER BY max(created_at) DESC LIMIT 5";

echo "<h2>Hostories:</h2><div>";
$histories = array();
$result = $db_connection->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div><a href=\"/companies/".$row["company"]."/".$row["item"].".php\">".$row["item"]."</a></div>";
    }
}
echo "</div>";


$companies = array("lijuan", "kunsu", "tyang", "junyanwang", "zijian", "ruzhang");
foreach($companies as $company) {
  getHistoryOf($company, $userid);
}

function getHistoryOf($company, $userid) {
  global $db_connection;
  $sql = "SELECT item, max(created_at) FROM histories where userid = ".$userid." AND company = '".$company."' GROUP BY item ORDER BY max(created_at) DESC LIMIT 5";

  $result = $db_connection->query($sql);
  if ($result->num_rows > 0) {
    echo "<h3>History of ".$company.":</h3>";
    while($row = $result->fetch_assoc()) {
      echo "<div><a href=\"/companies/".$company."/".$row["item"].".php\">".$row["item"]."</a></div>";
    echo "</div>";
    }
  }
}
?>
