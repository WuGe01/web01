<?php
include_once "../input/base.php";
$r=col('admin',$_POST);
if($r==1){
$_SESSION["login"]=$_POST['acc'];
to("../backend.php?do=main");
}else{
  echo "<script>alret('密碼錯誤')</script>";
  to("../index.php?do=main");
}

?>