<?php
include_once "../input/base.php";
print_r($_POST);
print_r($_FILES);
if(!empty($_FILES['img']) && $_FILES['img']['error']==0){
    $_POST['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_POST['name']."");
   }
if(!empty($_FILES['av']) && $_FILES['img']['error']==0){
$_POST['av']=$_FILES['av']['name'];
move_uploaded_file($_FILES['av']['tmp_name'],"../img/".$_POST['name']."");
}
$_POST['ondat']=$_POST['year']."-".$_POST['month']."-".$_POST['day'];
save("movie",$_POST);
to('../index.php?do=vv');
?>