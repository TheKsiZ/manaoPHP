<?php
    require_once "../classes/user.php";
    require_once "../classes/dbUtils.php";
    require_once "../scripts/validation.php";

    $utils = new dbUtils();
    //Create user's profile
    $user = new User($_POST["username"],$_POST["password"],$_POST["email"],$_POST["name"]);        
    
    //Validation    
    if(isUsernameCreated($user)){
        echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE);
        return;              
    }
    if(isEmailCreated($user)){
        echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE);
        return;        
    }        
    
    //Save user (cookies + session)
    session_start();
    $_SESSION["username"] = $user->getUsername();    
    setcookie("username", $_SESSION["username"], 0, '/');
    //Adding json to database
    $utils->Insert($user);
?>