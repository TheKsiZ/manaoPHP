<?php
    require_once "../classes/user.php";
    require_once "../classes/dbUtils.php";
    require_once "../scripts/validation.php";

    $utils = new dbUtils();
    //Create user's profile
    $user = new User($_POST["username"],$_POST["password"],$_POST["email"],$_POST["name"]);        
    
    //Validation    
    if(isUsernameCreated($user)){
        var_export("u" . $_SESSION["ERROR"]["usernameError"]);
        return;
        //header("Location: ./../registration.php");        
    }
    if(isEmailCreated($user)){
        var_export("e" . $_SESSION["ERROR"]["emailError"]);
        return;
        //header("Location: ./../registration.php");        
    }        
    
    //Save user (cookies + session)
    session_start();
    $_SESSION["username"] = $user->getUsername();    
    setcookie("username", $_SESSION["username"], 0, '/');
    //Adding json to database
    $utils->Insert($user);

    //Returning to main page 
    header("Location: ./../index.php");
?>