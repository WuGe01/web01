<?php
include_once "../input/base.php";
$r=col('admin',$_POST);
if($r==1){
$_SESSION["login"]=$_POST['acc'];
to("../backend.php?do=main");
$data['text']=find('total',1)['text'];
$data['text']++;
$data['id']=1;
save('total',$data);
}else{
  echo "<script>alert('警告：帳號密碼錯誤'); location.href = '../index.php?do=main';</script>";
}

?>