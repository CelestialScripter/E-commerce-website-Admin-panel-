<?php  
// This class is called by ajax from register.php

require 'connect.php';
require 'date.php';

//get the post records
	
		// $cat_name = $_POST ['cat_name'];
		// $cat_description = $_POST ['cat_description'];
		 $cat_name= (isset($_POST['cat_name']) ? $_POST['cat_name'] : '');
		  $cat_description = (isset($_POST['cat_description']) ? $_POST['cat_description'] : '');
		
					// REGISTER
					// INSERT INTO DB
					$insert_reg_query = " INSERT INTO category (`cat_name`, `cat_description`)
					VALUES( '$cat_name', '$cat_description') ";

					$insert_reg_result = mysqli_query( $mysqli, $insert_reg_query );


				if( !$insert_reg_result )
				{
					die(mysqli_error($mysqli));
				
					echo "Category alreay exists";
					exit();
				} else {echo "New category added";
						exit();
					}
			
		
?>
