<?php           
    session_start();
    //Delete session and cookies data 
    session_destroy();
    setcookie("username", "", time()-3600, '/');                
 
    header("Location: ./../registration.php");
?>