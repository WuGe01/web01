<?php
include_once "../input/base.php";
print_r($_POST);
if(col('admin',['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])==1){
    $_SESSION['login']=$_POST['acc'];
    save("total",['acc'=>$_POST['acc'],'text'=>date('Y-m-d')]);
    to("../index.php");
}elseif(col('admin',['acc'=>$_POST['acc']])==1){
  
    echo "<script>alert('密碼錯誤');location.replace('../index.php?do=login')</script>";

}else{

    echo "<script>alert('查無帳號');location.replace('../index.php?do=login')</script>";
}
?>