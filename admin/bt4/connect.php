<?php
	$mysqli = new mysqli("localhost", "root", "", "website");
// TEst if connection occurred.
if (mysqli_connect_errno()) {
	printf("Database connection failed:" . mysqli_connect_error());
	exit();
}
?>
