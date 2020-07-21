<?php
include_once "../plugin/base.php";

if(!empty($_POST['acc']) && !empty($_POST['pw'])){
    $title=new DB ('admin');
    $r=$title->num($_POST);
    if($r>0){
        $_SESSION['login']=1;
        to("../backend.php");  
    }else{
        to("../index.php?do=login&&login=2");  
    }


}else{

    to("../index.php?do=login&&login=1");
}



?>