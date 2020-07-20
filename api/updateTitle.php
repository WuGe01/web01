<?php
include_once "../plugin/base.php";
$type=$_POST['type'];
$title=new DB($type);
echo "<pre>";
print_r($_FILES);
print_r($_POST);
echo "</pre>";
//files
if(!empty($_FILES['img']['tmp_name'])){
    foreach ($_FILES['img']['error'] as $key => $value) {
        if($value==0){
            move_uploaded_file($_FILES['img']['tmp_name'][$key],"../img/".$_FILES['img']['name'][$key]);
            $file=$title->find($_POST['id'][$key]);
            $file['name']=$_FILES['img']['name'][$key];
            $title->save($file);
        }
    }
}
//post
foreach ($_POST['id'] as $key => $value) {
    if(!empty($_POST['del']) && in_array($value,$_POST['del'])){
        $title->del($value);
        echo "del:".$value;
    }else{
        $data=[];
        $data['text']=$_POST['text'][$key];
        $data['id']=$value;
        $data['sh']=(in_array($value,$_POST['sh']))?1:0;
        $title->save($data);

    }
}

to("../backend.php?do=main");
?>