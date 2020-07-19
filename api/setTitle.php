<?php
include_once "../plugin/base.php";
print_r($_FILES);
print_r($_POST);
$date=[];
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
   $date['name']=$_FILES['img']['name'];
   $date['text']=$_POST['text'];
   $date['sh']=1;
   $title->save($date);
}
to("../backend.php?do=main");
?>