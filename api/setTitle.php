<?php
include_once "../plugin/base.php";
$type=$_POST['type'];
$title=new DB($type);
print_r($_FILES);
print_r($_POST);
$file=[];
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
   $file['name']=$_FILES['img']['name'];
   $date['text']=$_POST['text'];
    $date['sh']=1;
   $title->save($file);
}else{
    $date=[];
    $date['text']=$_POST['text'];
    $date['sh']=1;
    $title->save($date);
}
to("../backend.php?do=$type");
?>