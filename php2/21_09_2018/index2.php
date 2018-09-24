<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['txt_name'])&&isset($_POST['txt_pass']))
        {
            if ($_POST['txt_name']&&$_POST['txt_pass']) {
                echo $_POST['txt_name'];
            } else {
                echo "Chua nhap";
            }
          
        }
        else
            echo "Khong duoc khoi tao"; 
    ?>

    <form action="xuly2.php" method="post">
        name : <input type="text" name="txt_name" value="<?php echo isset($_POST['txt_name'])?$_POST['txt_name']:'';?>">
        <br>
        <br>
        password : <input type="password" name="txt_pass" value ="<?= isset($_POST['txt_pass'])?$_POST['txt_name']:''?>">
        <br>
        <br>
        <button type="submit" name = "btn_submit">Click</button>

    </form>


    
</body>
</html>