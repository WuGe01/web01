<?php
include_once "../input/base.php";
$title=$_GET['title'];
// print_r($_GET);
// print_r($_POST);
$find=find($title,$_POST);
// print_r($find);
if($find==null){
    echo "查無此帳號";
}else{
    echo "您的密碼為:".$find['pw'];
}




?>