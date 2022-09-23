<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/form.css">
    <title>Registration</title>
</head>
<body>
    <script src="./includes/scripts/validation.js"></script>
    <div>
        <form name="registration" action=".php" method="post">
            <input placeholder="Login" type="text" name="login" minlength="6" autofocus required> 
            <input placeholder="Password" type="password" id="password" name="password" minlength="6" onkeyup="validate_passwords()" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]+$" title="Пароль должен иметь минимум 6 символов и содержать латинские буквы (a-Z) и цифры (0-9)" required> 
            <input placeholder="Confirm password" type="password" id="confirmpassword" name="confirmpassword" onkeyup="validate_passwords()" required> 
            <span id="error" style="color: red;"></span>
            <input placeholder="Email" type="text" name="email" required>
            <input placeholder="Name" type="text" name="name" required>
            
            <input type="submit" value="Submit" id="submit">
        </form>
        <a href="signin.php">Sign In</a>
    </div>
    
</body>
</html>