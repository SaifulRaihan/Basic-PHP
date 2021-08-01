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
        /* First method to create array */
        $numbers = array( 1,2,3,4,5);

        foreach ($numbers as $value){
            echo "Value is $value <br>";
        }

        /* Second method to create array */
        $numbers[0] = 'One';
        $numbers[1] = 'Second';
        $numbers[2] = 'Three';
        $numbers[3] = 'Four';
        $numbers[4] = 'Five';

        foreach ($numbers as $value){
            echo "Value is $value <br>";
        }

    ?>
</body>
</html>