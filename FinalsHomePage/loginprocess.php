<?php

session_start ();

$con = mysqli_connect('localhost', 'root', '','online_store');

if(isset($_REQUEST['log']))
{
	

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	// $a = $_REQUEST['uname'];
	// $b = $_REQUEST['upassword'];

	$select_users = mysqli_query($con, "SELECT * FROM `profile` WHERE email = '$email' AND password = '$password'") or die('query failed');

	if(mysqli_num_rows($select_users) > 0){

		$row = mysqli_fetch_assoc($select_users);
		
		$_SESSION["login"]="1";
		$_SESSION['user_name'] = $row['username'];
		$_SESSION['user_email'] = $row['email'];
		$_SESSION['user_id'] = $row['user_id'];
		header("location:homePage.php");
	}
	else	
	{
		
		header("location:LoginPage.php?err=1");
		$message[] = 'Incorrect Email or Password!';
		
	}
}
?>
