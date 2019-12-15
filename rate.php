<?php
include "config.php";

if(isset($_GET['rating'] ,$_GET['name'], $_GET['comment'], $_COOKIE['userID']))
{
	//get the rating
	$rating = $_GET['rating'];

	//get the product ID
	$name = $_GET['name'];
	$productID_sql = "SELECT id FROM product WHERE name = '$name'";
	$productID_query = mysqli_query($db_connection, $productID_sql);
	$productID_query = mysqli_fetch_array($productID_query);
	$productID = $productID_query['id'];

	//get the user information
	$userID = $_COOKIE['userID'];

	// get user name information
	$userName_sql = "SELECT username FROM users WHERE id = '$userID'";
	$userName_query = mysqli_query($db_connection, $userName_sql);
	$userName_query = mysqli_fetch_array($userName_query);
	$userName = $userName_query['username'];

	echo $userName;

	//get the review description
	$review = $_GET['comment'];

	//insert new record into product review
	$productreviews_sql = "INSERT INTO productreviews (productID, userID, userName , rating, review) VALUES ('$productID', '$userID', '$userName', '$rating', '$review')";

	$stmt = mysqli_prepare($db_connection, $productreviews_sql);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($db_connection);
	$redirect =$name . ".php";

	// handle redirect
	header('Location: ' . $_SERVER['HTTP_REFERER']);

}
else
{
	echo "failed";
}
?>
