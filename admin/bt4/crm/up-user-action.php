<?php  
// This class is called by ajax from register.php


require 'connect.php';

require 'date.php';
                                                                                         
                             
                              
                              $first_name =  mysqli_real_escape_string($mysqli,$_POST['first_name']);
                              $last_name=  mysqli_real_escape_string($mysqli,$_POST['last_name']);
                              $DOB=  mysqli_real_escape_string($mysqli,$_POST['DOB']);
                              $email=  mysqli_real_escape_string($mysqli,$_POST['email']);
                              $mobile_no=  mysqli_real_escape_string($mysqli,$_POST['mobile_no']);
                              // $profile_pic=  mysqli_real_escape_string($mysqli,$_POST['profile_pic']);
                              $is_admin=  mysqli_real_escape_string($mysqli,$_POST['is_admin']);
                              $is_active=  mysqli_real_escape_string($mysqli,$_POST['is_active']);
                              $is_verified=  mysqli_real_escape_string($mysqli,$_POST['is_verified']);
                              $gender=  mysqli_real_escape_string($mysqli,$_POST['gender']);
                              $password=  mysqli_real_escape_string($mysqli, $_POST['password']);




                               $targetDir = "product_pic/";
				$fileName = basename($_FILES["file"]["name"]);
				$targetFilePath = $targetDir . $fileName;
				$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  				$allowTypes = array('jpg','png','jpeg','gif','pdf');


                        	if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

					 $update_event_query = " UPDATE users set   first_name='$first_name', last_name='$last_name', DOB='$DOB', email='$email', mobile_no='$mobile_no', profile_pic='$targetFilePath', is_admin='$is_admin',is_active='$is_active', is_verified='$is_verified', gender='$gender', password='$password' ";

					 $update_event_result = mysqli_query( $mysqli, $update_event_query );

			
					

				if( $update_event_result)
				{
					die(mysqli_error($mysqli));
				
					echo "Product added successfuly ";
					exit();
				 }
				}


elseif(isset($first_name))
{
	$update_event_query = " UPDATE users set  first_name='$first_name', last_name='$last_name', DOB='$DOB', email='$email', mobile_no='$mobile_no', is_admin='$is_admin',is_active='$is_active', is_verified='$is_verified', gender='$gender', password='$password' ";
					 

					 $update_event_result = mysqli_query( $mysqli, $update_event_query );
					

					 if( !$update_event_result )
					{
						die(mysqli_error($mysqli));
					}

					 echo "User Updated successfuly";
					 exit();
}

else{
	echo "error". mysqli_error($mysqli);
	exit();
}

   	// $evnt_date = new DateTime;

    // $DOB = $DOB->format('d-M-Y');
    
   // $date_today = date('d-M-Y');



// if(is_array($_FILES))   
//  {  
      

//       foreach ($_FILES['file']['name'] as $name => $value)  
//       {  
//            $file_name = explode(".", $_FILES['file']['name'][$name]);  
//            $allowed_ext = array("jpg", "jpeg", "png", "gif");  
//            if(in_array($file_name[1], $allowed_ext))  
//            {  
//                 $new_name = substr(sha1(mt_rand()),0,50) . '.' . $file_name[1];  
//                 $sourcePath = $_FILES['file']['tmp_name'][$name];  
//                 $target = "profile_pic/".$new_name;  
//                 if(move_uploaded_file($sourcePath, $target))   
//                 {  
                     
					 
// 					 $update_event_query = " UPDATE users set   first_name='$first_name', last_name='$last_name', DOB='$DOB', email='$email', mobile_no='$mobile_no', profile_pic='$profile_pic', is_admin='$is_admin',is_active='$is_active', is_verified='$is_verified', gender='$gender', password='$password' ";
					 

// 					 $update_event_result = mysqli_query( $mysqli, $update_event_query );
					

// 					 if( !$update_event_result )
// 					{
// 						die(mysqli_error($mysqli));
// 					}

// 					 echo "pass";
// 					 exit();
//                 }                 
//            }            
//       }   
//  }  






			
			
		
		


	






?>