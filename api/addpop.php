<?php
include_once "../input/base.php";
// print_r($_FILES);
// print_r($_POST);
if(!empty($_FILES['img'])){
 $data['name']=$_FILES['img']['name'];
 move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$data['name']."");
}
if(!empty($_POST['text']))$data['text']=$_POST['text'];
$f=q("SELECT max(ord) FROM `pop`");
echo $f['max(ord)'];
$f['max(ord)']++;
$data['ord']=$f['max(ord)'];
save('pop',$data);
print_r($data);
to('../index.php?do=rr');
?>