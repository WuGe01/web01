<?php
include_once "../input/base.php";
$acc=$_POST['acc'];

if($_POST['pw']!=$_POST['pw2']){
    echo "<script>alert('密碼錯誤，請重新輸入');location.replace('../index.php?do=newman')</script>";
    
}elseif(col('login',['acc'=>$acc])>0){
    // echo col('login',$acc);
    echo "<script>alert('帳號重複，請重新輸入');location.replace('../index.php?do=newman')</script>"; 

}else{
    $data['acc']=$_POST['acc'];
    $data['pw']=$_POST['pw'];
    $data['email']=$_POST['email'];
    save('login',$data);
    echo "<script>alert('註冊成功歡迎加入');location.replace('../index.php?do=newman')</script>"; 
}




?>
