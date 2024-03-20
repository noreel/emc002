<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');



$con = mysqli_connect('localhost', 'root', '','online_store');

if(isset($_POST['sub'])){
	// get the post records
	$uname = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$email = $_POST['email'];

	$select_users = mysqli_query($con, "SELECT * FROM `profile` WHERE email = '$email' AND password = '$password'") or die('query failed');

	// database insert SQL code
	// $sql = "INSERT INTO `profile` (`username`, `password`, `firstname`, `lastname`, `mobile`, `address`, `email`) VALUES ('$uname', '$password', '$firstname', '$lastname', '$mobile', '$address', '$email')";

	if(mysqli_num_rows($select_users) > 0){
		header('location:SignUpPage.php?err=1');
		
	}
		
	else{
		mysqli_query($con, "INSERT INTO `profile` (`username`, `password`, `firstname`, `lastname`, `mobile`, `address`, `email`) VALUES ('$uname', '$password', '$firstname', '$lastname', '$mobile', '$address', '$email')") or die('query failed');
		$message[] = 'Registered Successfully!';
		header('location:LoginPage.php');
	}
	 

}
?>

<!-- <?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?> -->