<?php 
function attempt_login($email, $password) { global $mysqli;
	$admin = find_admin_by_email($email);
	if($email) {
		//found admin, now check pasword
	if(password_check($password, $admin["hashed_password"])) {
		//password matches
		return $admin;

	} else {
		//password does not match
		return false;
	}
	} else {
		//admin not found
		return false;
	}

}	
?>