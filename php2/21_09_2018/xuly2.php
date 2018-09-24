<?php
/*
    if(isset($_POST['txt_name'])){
        echo $_POST['txt_name'];
    }
*/
/*
    if(!empty($_POST['txt_name'])){
        echo $_POST['txt_name'];
    }
    else {
        echo "vui long truyen data";
        header('Location:index2.php');
    }
*/

if( isset($_POST['txt_name']) 
    && isset($_POST['txt_pass']) 
    && $_POST['txt_name']=="admin"
    && $_POST['txt_pass']=='111111') {
        echo "chao ".$_POST['txt_name'];
}
else{
    header('Location:index2.php');
}

?>