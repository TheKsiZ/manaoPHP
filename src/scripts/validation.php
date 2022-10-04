<?php
    require_once "../classes/user.php";
    require_once "../classes/dbUtils.php";
    
    //ERROR->usernameError
    function isUsernameCreated(User $currentUser){    
        $utils = new dbUtils();    
        $json = file_get_contents($utils->getFile());
        $jsonArray = json_decode($json, true);
        foreach($jsonArray as $user){
            if($user["username"] == $currentUser->getUsername()){
                session_start();
                $_SESSION["ERROR"]["usernameError"] = "Пользователь с таким именем уже был создан.";
                return true;
            }
        }       
        if(isset($_SESSION["ERROR"]["usernameError"])){
            unset($_SESSION["ERROR"]["usernameError"]);
        }     
        return false;    
    }

    //ERROR->emailError
    function isEmailCreated(User $currentUser){
        $utils = new dbUtils();
        $json = file_get_contents($utils->getFile());
        $jsonArray = json_decode($json, true);
        foreach($jsonArray as $user){
            if($user["email"] == $currentUser->getEmail()){
                session_start();
                $_SESSION["ERROR"]["emailError"] = "Пользователь с такой почтой уже был создан.";
                return true;
            }
        }
        if(isset($_SESSION["ERROR"]["emailError"])){
            unset($_SESSION["ERROR"]["emailError"]);
        }        
        return false;
    }    

    //ERROR->invalidError
    function IsCorrectData(User $currentUser){
        $utils = new dbUtils();
        $json = file_get_contents($utils->getFile());
        $jsonArray = json_decode($json, true);    
        session_start();
        foreach($jsonArray as $user){
            if($user["username"] == $currentUser->getUsername() && $user["password"] == $currentUser->getPassword()){
                if(isset($_SESSION["ERROR"]["invalidError"])){                    
                    unset($_SESSION["ERROR"]["invalidError"]);
                }
                return true;
            }
        }            
        $_SESSION["ERROR"]["invalidError"] = "Логин или пароль неверен";        
        return false;        
    }
?>