<?php

session_start ();

$con = mysqli_connect('localhost', 'root', '','online_store');

if(isset($_REQUEST['log']))
{
	

	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	// $a = $_REQUEST['uname'];
	// $b = $_REQUEST['upassword'];

	$select_profile = mysqli_query($con, "SELECT * FROM `profile` WHERE username = '$username' AND password = '$password'") or die('query failed');

	if(mysqli_num_rows($select_profile) > 0){

		$row = mysqli_fetch_assoc($select_profile);
		
		
		$_SESSION['username'] = $row['username'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['user_id'] = $row['user_id'];
		header("location:homePage.php");
	}
	else	
	{
		
		header("location:LoginPage.php?err=1");
		
		
	}
}
?>
