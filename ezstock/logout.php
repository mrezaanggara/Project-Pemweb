<?php
require("db_connect.php");
session_start();
$user=$_SESSION['login_user'];
$query = "UPDATE users SET status_login='0' WHERE user_id='$user' ";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

session_destroy();
header ("Location: index.php");

?>