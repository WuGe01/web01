<?php
include_once "../input/base.php";
$chk=col('login',$_POST);
$cha=col('login',['acc'=>$_POST['acc']]);
$chp=col('login',['pw'=>$_POST['pw']]);
if($chk>0){
  $_SESSION['login']=$_POST['acc'];
  to("../back.php");
}else{
    if($cha==0 && $chp==0){
    echo "<script>alert('查無帳號與密碼錯誤'); location.replace('../index.php?do=login');</script>";
    }elseif($cha==0){
    echo "<script>alert('查無帳號'); location.replace('../index.php?do=login');</script>";
    }else{
    echo "<script>alert('密碼錯誤'); location.replace('../index.php?do=login');</script>";
    }
}

?>
