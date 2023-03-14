<?php  
// This class is called by ajax from register.php


require 'connect.php';
require 'date.php';

//get the post records
		$first_name = $_POST ['first_name'];
		$last_name = $_POST ['last_name'];
		$DOB = $_POST ['DOB'];
		$email = strtolower( $_POST['email'] );
		// $email  = $_POST ['email'];
		$mobile_no = $_POST ['mobile_no'];
		// $profile_pic = $_POST ['profile_pic'];
		$is_admin = $_POST ['is_admin'];
		$is_active = $_POST ['is_active'];
		$is_verified = $_POST ['is_verified'];
		$gender = $_POST ['gender'];
		$password  = $_POST ['password'];



// Hash Password using SHA256
$level_1 = hash('sha256', $_POST['password']);
$level_2 = hash('sha256', $level_1);
$level_3 = hash('sha256', $level_2);
$password = hash('sha256', $level_3);
if(isset($first_name))

//Adding profile pic
$targetDir = "profile_pic/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  $allowTypes = array('jpg','png','jpeg','gif','pdf');

// VALIDATE EMAIL
if( filter_var($email, FILTER_VALIDATE_EMAIL) === false ) 
{
  echo "email_error";
}
else
{
	// Check if this email exists
	$verify_email_query = " SELECT email FROM users WHERE email='$email' ";

	$verify_email_result = mysqli_query($mysqli, $verify_email_query );

	 $email_rows_ret = mysqli_num_rows( $verify_email_result );

	if( $email_rows_ret < 1 )
	{
		
		
		// This means there was no hit on the email. Let's 
	 if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
		
		
					// REGISTER
					// INSERT INTO DB
					$insert_reg_query = " INSERT INTO users (`first_name`,`last_name`,`DOB`,`email`,`mobile_no`,`profile_pic`,`is_admin`,`is_active`,`is_verified`,`gender`,`password`)
					VALUES('$first_name', '$last_name', '$DOB', '$email', '$mobile_no', '$targetFilePath', '$is_admin', '$is_active', '$is_verified', '$gender', '$password' ) ";

					$insert_reg_result = mysqli_query( $mysqli, $insert_reg_query );


					if( !$insert_reg_result )
					{
						die(mysqli_error($mysqli));
					}

					//attention check screen shot
					//require 'activation-mail.php';

					header('Location: thankyou.php');
					exit();

					}                 
          

	}
				else
					{
						echo "email_exists";
						exit();
					}
			
		}
		


	






?>