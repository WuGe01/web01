<?php
include_once "../plugin/base.php";
$type=$_POST['type'];
$title=new DB($type);
print_r($_FILES);
print_r($_POST);
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
    $file=[];
   $file['name']=$_FILES['img']['name'];
   if(!empty($_POST['text'])){
       $file['text']=$_POST['text'];
   }
    $file['sh']=1;
   $title->save($file);
}else{
    $date=[];
    if(!empty($_POST['text']))$date['text']=$_POST['text'];
    if(!empty($_POST['pw']))$date['pw']=$_POST['pw'];
    if(!empty($_POST['acc']))$date['acc']=$_POST['acc'];
    $date['sh']=1;
    $title->save($date);
}
to("../backend.php?do=$type");
?>