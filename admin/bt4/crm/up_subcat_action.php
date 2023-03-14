<?php 
require 'connect.php';

require 'date.php';

		  $sub_cat_name= (isset($_POST['sub_cat_name']) ? $_POST['sub_cat_name'] : '');
		  $sub_cat_desc = (isset($_POST['sub_cat_desc']) ? $_POST['sub_cat_desc'] : '');



		  $update_event_query = " UPDATE category set sub_cat_name= '$sub_cat_name', sub_cat_desc= $sub_cat_desc";


					 $update_event_result = mysqli_query( $mysqli, $update_event_query );
					

					 if( !$update_event_result ){
					{
						die(mysqli_error($mysqli));
					}

					 echo "pass";
					 exit();
}

else{
	echo "error". mysqli_error($mysqli);
	exit();
}


?>