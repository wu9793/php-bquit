<?php

include_once "db.php";
dd($_POST);

foreach($_POST['id'] as $key => $id){
    $row=$Title->find($id);
    // dd($row);
    $row['text']=$_POST['text'][$key];
    $Title->save($row);
}

foreach($_POST['id'] as $id){

    $row=$Title->find($id);
    // if($id==$_POST['view']){
    //     $row['view']=1;
    // }else{
    //     $row['view']=0;
    // }
    $row['view']=($id==$_POST['view'])?1:0;
    $Title->save($row);
}

// $_POST['view']=0;

// $Title->save($_POST);

// header("location:index.php");
?>