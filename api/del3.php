<?php
include_once "../input/base.php";
print_r($_POST);
if(!empty($_POST['deltype'])){
switch ($_POST['deltype']) {   
    case '1':
        del("qt",["sdat"=>$_POST['type']]);
        break;
    case '2':
        del("qt",["name"=>$_POST['name']]);
        break;

}

}
// del("qt",$_POST['id']);
to("../index.php?do=order");
?>