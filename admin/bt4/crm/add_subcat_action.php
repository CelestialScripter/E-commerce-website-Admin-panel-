<?php  
// This class is called by ajax from register.php

require 'connect.php';
require 'date.php';

//get the post records
	
		// $cat_name = $_POST ['cat_name'];
		// $cat_description = $_POST ['cat_description'];
		 $sub_cat_name = mysqli_real_escape_string($mysqli, $_POST['sub_cat_name']);
		  $sub_cat_desc = mysqli_real_escape_string($mysqli,$_POST['sub_cat_desc']);
		$cat_id = $_POST['cat_name'];
					// REGISTER
					// INSERT INTO DB
					$insert_reg_query = " INSERT INTO sub_category (`sub_cat_name`, `sub_cat_desc`, `cat_id`)
					VALUES('$sub_cat_name', '$sub_cat_desc', '$cat_id') ";

					$insert_reg_result = mysqli_query( $mysqli, $insert_reg_query );


				if( !$insert_reg_result )
				{
					die(mysqli_error($mysqli));
				
					echo '<script>alert("Subcategory already exists")</script>';
					exit();
				} else {echo "New Subcategory added";
			
						exit();
					}
			
		
?>
