<?php

include_once "db.php";
// 檔案上傳
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"./img/".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
}

$_POST['view']=0;

$Title->save($_POST);

header("location:index.php");
?>