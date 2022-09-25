<?php
    $data = [
        "username" => $_POST["username"],
        "password" => $_POST["password"],
        "email" => $_POST["email"],
        "name" => $_POST["name"]
    ];
    
    header("Location: ./../index.php");  
?>