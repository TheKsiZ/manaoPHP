<?php
    if(empty($_COOKIE)){        
        header("Location: ./registration.php");        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <?php
        $name = $_COOKIE["username"];
        echo "<h1>Hello, $name</h1>";
    ?>
    <input type="button" value="Exit">
</body>
</html>