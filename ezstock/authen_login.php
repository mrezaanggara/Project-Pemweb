<?php
	require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	//assign POST values
	$username= $_POST['user_id'];
	$password= $_POST['user_pass'];

	//check for the record from table
	$querry = "SELECT * FROM users WHERE user_id='$username' and pass='$password'";

	$result = mysqli_query($connection, $querry) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);

	if ($count == 1){
		//echo "login verify"
		echo "<script type='text/javascript'>alert('Login Credentials Verified')</script>";
		$querry = "UPDATE users SET status_login='1' WHERE user_id='$username' ";
		$result = mysqli_query($connection, $querry) or die(mysqli_error($connection));
		session_start();
		$_SESSION['login_user']= $username;

		header ("Location: mainhome.php");
	}else{
		echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
		header ("Location: index.php");
	}
}