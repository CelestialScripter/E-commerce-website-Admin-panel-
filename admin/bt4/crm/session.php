<?php  
session_start();
    
    

if( !isset( $_SESSION['email'] ) )
{
    echo "<script>location.href='login.php'</script>";
}
?>
