<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading a file using PHP</title>
</head>
<body>
    <?php
        $filename = "log.txt";
        $file = fopen($filename, "r");

        if ($file == false){
            echo ("Error in openning file");

            exit();
        }

        $filesize = filesize($filename);
        $filetext = fread($file, $filesize);
        fclose($file);

        echo ("File size: $filesize bytes");
        echo ("<pre>$filetext<pre>");
    ?>
</body>
</html>