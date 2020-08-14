<?php
include_once "../input/base.php";


    if($_POST['acc']!='admin' && $_POST['pw']!='1234'){
        to("../index.php?do=back");
    }else{
        $_SESSION['login']=$_POST['acc'];
        to("../index.php?do=backend");
    }

?>