<?php  
// This class is called by ajax from register.php

require 'connect.php';
require 'date.php';

//get the post records
	
		 $it_name =  $_POST['it_name'];
		 $it_desc=  mysqli_real_escape_string($mysqli,$_POST['it_desc']);
		 $it_quantity = $_POST['it_quantity'];
		 $discount = $_POST['discount'];
		 $is_active = $_POST['is_active'];
		 $price = $_POST['price'];
		 $cat_id = $_POST['Category'];
		 $sub_id = $_POST['sub_category'];

		 
		      //Adding Product Pic
		        $targetDir = "product_pic/";
				$fileName = basename($_FILES["file"]["name"]);
				$targetFilePath = $targetDir . $fileName;
				$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  				$allowTypes = array('jpg','png','jpeg','gif','pdf');
		

					// REGISTER
					// INSERT INTO DB
  				if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
					$insert_reg_query = " INSERT INTO items (`it_name`, `it_desc`,`it_quantity`, `discount`, `is_active`, `price`, `product_pic`, `sub_id`, `cat_id` )
					VALUES('$it_name', '$it_desc', '$it_quantity', '$discount', '$is_active', '$price', '$targetFilePath','$sub_id', '$cat_id') ";

					$insert_reg_result = mysqli_query( $mysqli, $insert_reg_query );

			
					if(isset($first_name));

				if( !$insert_reg_result )
				{
					die(mysqli_error($mysqli));
				
					echo "Product added successfuly ";
					exit();
				 }
				} else {echo "Error in adding product";
			
						exit();
					}			
		
?>
