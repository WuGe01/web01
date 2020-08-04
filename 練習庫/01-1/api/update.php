<?php
include_once "../input/base.php";
$table=$_GET['title'];
print_r($_POST);
foreach ($_POST['id'] as $key => $value) {
 if(!empty($_POST['del']) && in_array($value,$_POST['del'])){
         del($table,$value);
    }else{
        if(!empty($_POST['sh'])){
            $data['sh']=(in_array($value,$_POST['sh']))?1:0;
        }
        if(!empty($_POST['text'])){
            $data['text']=$_POST['text'][$key];
        }
        if(!empty($_POST['acc'])){
            $data['acc']=$_POST['acc'][$key];
        }
        if(!empty($_POST['pw'])){
            $data['pw']=$_POST['pw'][$key];
        }
        if(!empty($_POST['name'])){
            $data['name']=$_POST['name'][$key];
        }
        if(!empty($_POST['parent'])){
            $data['parent']=$_POST['parent'][$key];
        }
      
        $data['id']=$value;

        save($table,$data);
    }

}
if(!empty($_POST['Xname'])){
    foreach ($_POST['Xname'] as $key => $value) {

if(!empty($_POST['Xtext'])){
$dat['text']=$_POST['Xtext'][$key];
}
if(!empty($_POST['Xname'])){
$dat['name']=$_POST['Xname'][$key];
}
if(!empty($_POST['Xparent'])){
$dat['parent']=$_POST['Xparent'][$key];
}


save($table,$dat);

}}

to("../backend.php?do=".$table."");
?>