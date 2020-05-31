<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

session_start();

if(!isset($_SESSION["email"])){
    header("Location:index.php");
}
else{
   // session_start();
        session_destroy();
        header("location:login.html");
}
        



    ?>
    
    
</body>
</html>