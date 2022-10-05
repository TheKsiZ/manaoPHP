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
    <title>Registration</title>
</head>
<body>
    <script src="./scripts/withscript.js"></script>
    <script src="./scripts/validation.js"></script>    
    <div>
        <form name="registration" id="registration" action="./scripts/registrateUser.php" method="post">
            <input placeholder="Login" type="text" name="username" minlength="6" pattern="^[A-Za-z0-9_-]+$" title="Имя должно содержать только латинские символы (a-z) и/или цифры (0-9)" autofocus required> 
            <span id="usernameError"></span>
            <input placeholder="Password" type="password" id="password" name="password" minlength="6" onkeyup="validate_passwords()" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]+$" title="Пароль должен содержать латинские буквы (a-Z) и цифры (0-9)" required> 
            <input placeholder="Confirm password" type="password" id="confirmpassword" name="confirmpassword" onkeyup="validate_passwords()" required>             
            <span id="errorPassword"></span>
            <input placeholder="Email" type="text" name="email" pattern="^(?=.{1,64}@)[A-Za-z0-9_-]+(\.[A-Za-z0-9_-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,})$" title="Неверный формат почты" required>
            <span id="emailError"></span>
            <input placeholder="Name" type="text" name="name" minlength="2" pattern="^[A-Za-z]+$" title="Имя должно содержать только латинские символы (a-z)" required> 
            
            <input type="submit" value="Submit" id="submit" disabled>
        </form>
        <a href="./signin.php">Sign In</a>
    </div>            
</body>
</html>