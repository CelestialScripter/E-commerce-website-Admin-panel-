<?php 
require 'connect.php';

require 'date.php';

		  $cat_name= (isset($_POST['cat_name']) ? $_POST['cat_name'] : '');
		  $cat_description = (isset($_POST['cat_description']) ? $_POST['cat_description'] : '');



		  $update_event_query = " UPDATE category set cat_name= '$cat_name', cat_description= $cat_description";


					 $update_event_result = mysqli_query( $mysqli, $update_event_query );
					

					 if( !$update_event_result ){
					{
						die(mysqli_error($mysqli));
					}

					 echo "pass";
					 exit();


}else {
	echo "error". mysqli_error($mysqli);
	exit();
}


?>