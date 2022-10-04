<?php    
    session_start();
    if(isset($_COOKIE["username"])){        
        header("Location: ./index.php");        
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>    
    <title>Sign In</title>
</head>
<body>
    <script src="./scripts/withscript.js"></script>
    <script src="./scripts/validation.js"></script>
    <div>
        <form name="login" id="login" action="./scripts/login.php" method="post">
            <input placeholder="Login" type="text" name="username" minlength="6" autofocus required> 
            <input placeholder="Password" type="password" id="password" name="password" minlength="6" required> 
            <span id="invalidError" value=""></span>
            <input type="submit" value="Submit" id="submit" disabled>
        </form>
        <a href="./registration.php">Registration</a>
    </div>    
</body>
</html>