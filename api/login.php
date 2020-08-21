<?php
include_once "../input/base.php";

if($_POST['chk']!=$_POST['chk2']){
echo "<script>alert('對不起，您輸入的認證碼有誤請您重新登入');location.replace('../index.php?do=login')</script>";
}elseif (col("login",['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])==1) {
$_SESSION['login']=$_POST['acc'];
to("../index.php");
}else{
echo "<script>alert('密碼帳號有誤');location.replace('../index.php?do=login')</script>";
}

?>
