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
    <div>
        <form>
            <input placeholder="Login" type="text" name="login" minlength="6" required> 
            <input placeholder="Password" type="password" name="password" minlength="6" required> 
            <input placeholder="Confirm password" type="password" name="confirmpassword" required> 
            <input placeholder="Email" type="text" name="email" required>
            <input placeholder="Name" type="text" name="name" required>
            
            <input type="submit" value="Submit">
        </form>
        <a href="#">Register</a>
    </div>
    
</body>
</html>