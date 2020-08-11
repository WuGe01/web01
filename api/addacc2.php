<?php
include_once "../input/base.php";
print_r($_POST);
if($_POST['pw']!=$_POST['pw2']){
 echo "<script>alert('密碼錯誤');location.replace('../index.php?do=login')</script>";
}elseif ($_POST['pw']=="" || $_POST['acc']=="" || $_POST['mil']=="") {
    echo "<script>alert('不可為空白');location.replace('../index.php?do=login')</script>";
}elseif(col("admin",['acc'=>$_POST['acc']])!=0) {
    echo "<script>alert('帳號重複');location.replace('../index.php?do=login')</script>";
}else{
    save("admin",['acc'=>$_POST['acc'],'pw'=>$_POST['pw'],'mil'=>$_POST['mil']]);
    to("../index.php?do=login");
}
?>
