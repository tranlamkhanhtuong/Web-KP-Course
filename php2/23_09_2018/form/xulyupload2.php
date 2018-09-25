<?php
/*
    $image = $_FILES['image'];
    if($image['error']>0)
        echo "Fail";
    else
    {
        $des = 'des/'.$image['name'];
        move_uploaded_file($image['tmp_name'],$des);
    }
*/

    $image = $_FILES['image'];
    if($image['error']>0)
    {
        echo "Fail";
    }
    else
    {
        if($image['size']<=10*1024)
        {
            $oldName = $image['name'];
            $ext = pathinfo($oldName,PATHINFO_EXTENSION);
            $arrExt = ['png', 'jpg', 'gif', 'jpeg','txt'];
            if(!in_array($ext,$arrExt))
            {
                echo "File not found";
            }
            else
            {
                echo "Vao";
                $newName = date('Y-m-d-H-i-s-',time()).$oldName;
                mkdir('user2',0755); //
                // chủ file có mọi quyền, mọi người có quyền đọc và thực thi.
                $des = 'user2/'.$newName;
                move_uploaded_file($image['tmp_name'],$des);
                if(file_exists("user2/$newName"))
                    echo "Upload successfuly!";
                else 
                    echo 'Fail!';
            }
        }
    }
?>