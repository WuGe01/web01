<?php
include_once "../input/base.php";
if(col("admin",['mil'=>$_POST['mil']])==1){
    $f=find("admin",['mil'=>$_POST['mil']]);
    echo "您的密碼是:".$f['pw']."";
}else{
    echo "查無此資料";
}



?>