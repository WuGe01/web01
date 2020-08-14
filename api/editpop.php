<?php
include_once "../input/base.php";
foreach ($_POST['id'] as $key => $value) {
    if(!empty($_POST['del']) && in_array($value,$_POST['del'])){
        del('pop',$value);
    }else{
        $data['id']=$value;
        $data['name']=$_POST['name'][$key];
        $data['text']=$_POST['text'][$key];
        $data['type']=$_POST['type'][$key];
        $data['sh']=(in_array($value,$_POST['sh']))?1:0;
        save('pop',$data);
    }
}
print_r($_POST);
to('../index.php?do=rr');
?>