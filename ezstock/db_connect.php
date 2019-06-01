<?php
$ipdb="localhost";
$userdb="root";
$passdb="";
$dbname="ez-stock";
$connection = mysqli_connect($ipdb,$userdb,$passdb);
if (!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, $dbname);
if (!$select_db){
	die("Database Selection Failed" . mysqli_error($connection));
}
?>