<?php  
// This is a class called by Ajax in login.php
session_start();
      require 'connect.php';
      require 'date.php';


$email = strtolower( $_POST['email'] );
$password  = $_POST ['password'];


// Hash Password using SHA256
$level_1 = hash('sha256', $_POST['password']);
$level_2 = hash('sha256', $level_1);
$level_3 = hash('sha256', $level_2);
$password = hash('sha256', $level_3);

// Authenticate
$auth_query = " SELECT COUNT(id) AS count_users FROM adminlogin WHERE email='$email' AND password='$password' ";

$auth_result = mysqli_fetch_assoc( mysqli_query( $mysqli, $auth_query ) );

$count_users = $auth_result['count_users'];

if( $count_users < 1 )
{
	echo "Username/Password not found";
	exit();
}
else
{
	
		$_SESSION['email'] = $email;
		header('Location: index.php');;
		exit();
	
	

}


?>