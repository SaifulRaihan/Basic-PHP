<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload using PHP</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type='file' name='image'>
        <input type="submit">
    </form>
    <?php
        if(isset($_FILES["image"])){
            $errors = array();
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES[]
        }
    ?>
</body>
</html>