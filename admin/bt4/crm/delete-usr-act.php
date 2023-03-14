<?php 
	include 'connection.php';
	include 'date.php';


?>

<?php 
	$ID = mysqli_real_escape_string($mysqli, $_GET['usr_id']);



	$delete_user_query_1 = "DELETE from user WHERE usr_id = '".$ID."' ";
	$delete_user_query_1 = "DELETE from vendor WHERE usr_id = '".$ID."' ";
	$delete_user_query_1 = "DELETE from orders WHERE usr_id = '".$ID."' ";
	$delete_user_query_1 = "DELETE from review WHERE usr_id = '".$ID."' ";
	$delete_user_query_1 = "DELETE from login WHERE usr_id = '".$ID."' ";
	$delete_user_query_1 = "DELETE from cart WHERE usr_id = '".$ID."' ";
	
	
	

	
	

?>

