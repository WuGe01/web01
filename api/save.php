<?php
include_once "../input/base.php";
$table=$_GET['title'];
print_r($_FILES);
print_r($_POST);
if(!empty($_FILES['img'])){
    $date['name']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$date['name']."");
}
if(!empty($_POST['text']))$date['text']=$_POST['text'];
if(!empty($_POST['name']))$date['name']=$_POST['name'];
if(!empty($_POST['id']))$date['id']=$_POST['id'];
if(!empty($_POST['acc']))$date['acc']=$_POST['acc'];
if(!empty($_POST['pw']))$date['pw']=$_POST['pw'];
if(!empty($_POST['parent']))$date['parent']=$_POST['parent'];
save($table,$date);
to("../backend.php?do=".$table."");
?>