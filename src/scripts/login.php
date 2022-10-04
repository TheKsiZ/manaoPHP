<?php
    require_once "../classes/user.php";
    require_once "../classes/dbUtils.php";
    require_once "../scripts/validation.php";

    $user = new User($_POST["username"],$_POST["password"],"empty","empty");
    if(IsCorrectData($user)){        
        session_start();
        $_SESSION["username"] = $user->getUsername();    
        setcookie("username", $user->getUsername(), 0, '/');         
    }
    else{
        var_export($_SESSION["ERROR"]["invalidError"]);
    }    
?>