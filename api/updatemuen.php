<?php
include_once "../input/base.php";
$table=$_GET['title'];
print_r($_POST);
foreach ($_POST['id'] as $key => $value) {
    if(!empty($_POST['del']) && in_array($value,$_POST['del'])){
        del($table,$value);
    }else{
        if(!empty($_POST['text']))$data['text']=$_POST['text'][$key];
        if(!empty($_POST['sh']))$data['sh']=(in_array($value,$_POST['sh']))?1:0;
        $data['id']=$value;

        save($table,$data);
    }
}
if(!empty($_POST['Xname']) && !empty($_POST['Xtext'])){
foreach ($_POST['Xtext'] as $key => $value) {
    $dat['text']=$_POST['Xtext'][$key];
    $dat['name']=$_POST['Xname'][$key];
    $dat['parent']=$_POST['Xparent'][$key];   
    save($table,$dat);
}
    }
// to("../backend.php?do=".$table."");
?>
