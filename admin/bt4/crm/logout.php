<?php  
session_start();
unset($_SESSION['email']);
echo "<script>location.href='login.php'</script>";


?>