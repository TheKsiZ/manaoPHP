<?php    
    session_start();
    if(!isset($_COOKIE["username"])){         
        header("Location: ./registration.php");        
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Welcome!</title>    
</head>
<body> 
    <div>   
        <?php        
            $name = $_COOKIE["username"];
            echo "<h1>Hello, $name</h1>";
        ?>
        <form action="./scripts/exit.php" method="post">        
            <input type="submit" value="Exit" name="exit" id="exit">    
        </form>
    </div>
</body>
</html>