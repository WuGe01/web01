<?php
include_once "../input/base.php";
$table=$_GET['title'];
if(!empty($_FILES['img'])){
    $data['name']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/". $data['name']."");
}
if(!empty($_POST['text'])){
    $data['text']=$_POST['text'];
}
if(!empty($_POST['id'])){
    $data['id']=$_POST['id'];
}
save($table,$data);
// print_r($data);
to("../backend.php?do=".$table."");
?>