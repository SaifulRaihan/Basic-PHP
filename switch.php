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
        $d = "D";

        switch($d){
            case 'Mon':
                echo "Monday it is";
                break;
            case 'Tue':
                echo "Tuesday it is";
                break;
            case 'Wed':
                echo 'Wednesday it is';
                break;
            case 'D':
                echo 'This is the D day.';
                break;
            default:
                echo "Wonder which day it is?";
        }
    ?>
</body>
</html>