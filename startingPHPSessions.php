<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stting up a PHP session</title>
</head>
<body>
    <?php
    /* Starting a session */
    session_start();
    
    if( isset( $_SESSION['counter'] ) ) {
        $_SESSION['counter'] += 1;
    }else {
        $_SESSION['counter'] = 1;
    }
        
    $msg = "You have visited this page ".  $_SESSION['counter'];
    $msg .= " times in this session.";

    echo ($msg);
    /* Unsetting session counter */
    unset($_SESSION['counter']);
    /* Destroy session counter */
    session_destroy();
    ?>
</body>
</html>