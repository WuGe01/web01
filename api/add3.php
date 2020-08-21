<?php
include_once "../input/base.php";
if(!empty($_POST['power']))$_POST['power']=serialize($_POST['power']);
if(!empty($_FILES['img']) && $_FILES['img']['error']==0){
$_POST['img']=$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_POST['img']."");
}
save("good",$_POST);
print_r($_POST);
to("../back.php?do=th");
?>