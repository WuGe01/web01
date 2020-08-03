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
      
        $data['id']=$value;

        save($table,$data);
    }

}


to("../backend.php?do=".$table."");
?>