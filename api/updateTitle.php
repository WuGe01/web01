<?php
include_once "../plugin/base.php";
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
foreach ($_POST as $key => $value) {
    if(){
        
    }
}


// to("../backend.php?do=main");
?>