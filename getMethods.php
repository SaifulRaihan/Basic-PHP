<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "<?php $_PHP_SELF ?>" method = "GET">
        Name: <input type = "text" name = "name" />
        Age: <input type = "text" name = "age" />
        <input type = "submit" />
    </form>
    <?php
        if( isset($_GET['name']) || isset($_GET['age']) ){
            echo "Welcome ".$_GET['name'].'<br>';
            echo "You are ".$_GET['age']." years old.".'<br>';

            exit(); 
        }
    ?>
</body>
</html>