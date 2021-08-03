<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writting PHP function</title>
</head>
<body>
    <?php
        /* Defining PHP function */
        function writeMessage(){
            echo "You are really a nice person, Have a nice time! <br>";
        }
        /* Calling a PHP Function */
        writeMessage();

        function addFunction($num1,$num2){
            $sum = $num1 + $num2;
            echo ("Sum of thr two number is: $sum <br>");
        }
        addFunction(10,20);

        /* Passing arguments by reference*/
        function addFive($num){
            $num += 5;
        }
        function addSix(&$num){
            $num += 6;
        }

        $orignum = 10;

        addFive($orignum);
        echo ("Original number is: $orignum <br>");
        
        addSix($orignum);
        echo ("Original number is: $orignum");

        /* PHP function with return value */
        function numAdd($a, $b){
            $add = $a + $b;
            return $add;
        }
        $return_value = numAdd(10,20);
        echo "<br> Returned value from the function : $return_value";

        /* Setting default value for function parameters */
        function printMe($param = NULL){
            echo "$param";
        }
        printMe("<br>This is for test");
        printMe();

        /* Dynamic function call */
        function sayHello(){
            echo "<br>Hello";
        }
        $function_holder = "sayHello";
        $function_holder();
    ?>
</body>
</html>