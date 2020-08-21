<?php
include_once "../input/base.php";

if($_POST['chk']!=$_POST['chk2']){
echo "<script>alert('對不起，您輸入的認證碼有誤請您重新登入');location.replace('../index.php?do=admin')</script>";
}elseif (col("admin",['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])==1) {
$_SESSION['admin']=$_POST['acc'];
to("../back.php");
}else{
echo "<script>alert('密碼帳號有誤');location.replace('../index.php?do=admin')</script>";
}

?>
