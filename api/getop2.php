<?php
include_once "../input/base.php";
$row=find('op',['id'=>$_POST['id']]);
$arr=array(
    "name"=>$row['name'],
    "text"=>$row['text']
);
$xx=json_encode($arr);
echo $xx;
?>