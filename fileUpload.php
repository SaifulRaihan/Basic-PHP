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
            $file_size = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['name'];
            $file_type = $_FILES['image']['name'];
            $file_ext = strtolower(end(explode ('.',$_FILES['image']['name'])));

            $extensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$extensions)=== false){
                $errors[] = "Extension is not allowed, Please choose a jpeg, jpg, png file"; 
            }
            if($file_size > 2097152){
                $errors[] = 'File size must be exactly 2MB';
            }
            if(empty($errors)==true){
                move_uploaded_file($file_tmp,"images/".$file_name);
                echo "Success";
            }else{
                print_r($errors);
            }
        }
    ?>
</body>
</html>