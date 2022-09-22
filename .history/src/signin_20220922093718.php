<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/form.css">
    <title>Sign In</title>
</head>
<body>
    <script src="./scripts/validation.js"></script>
    <div>
        <form name="signin" action="" method="post">
            <input placeholder="Login" type="text" name="login" minlength="6" autofocus required> 
            <input placeholder="Password" type="password" id="password" name="password" minlength="6" required> 
            <input type="submit" value="Submit" id="submit">
        </form>
        <a href="registration.php">Registration</a>
    </div>
    
</body>
</html>