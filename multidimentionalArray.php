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
        $marks = array(
            "saiful" => array(
                "physics" => 35,
                "chemistry" => 40,
                'boilogy' => 45,
            ),
            "islam" => array(
                'bangla' => 50,
                'english' => 55,
                'math' => 60,
            ),
            "raihan" => array(
                'geology' => 65,
                'ethics' => 70,
                'history' => 75,
            )
        );
        /* Access multidimentional array values */
        echo "Marks for saiful in physics: ";
        echo $marks['saiful']['physics']."<br>";

        echo "Marks for islam in english: ";
        echo $marks['islam']['english']."<br>";

        echo "Marks for raihan in history: ";
        echo $marks['raihan']['history']."<br>";
    ?>
</body>
</html>