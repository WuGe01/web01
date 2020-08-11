<?php
include_once "../input/base.php";
print_r($_POST);
foreach ($_POST['id'] as $key => $value) {
    if(!empty($_POST['del']) && in_array($value,$_POST['del'])){
        del("admin",['id'=>$value]);
    }
   
}
to("../back.php?do=admin");
?>