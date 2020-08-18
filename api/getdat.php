<?php
include_once "../input/base.php";
$r=find('movie',$_POST['id']);
$date=date("Y-m-d l");
$day=date("Y-m-d l",strtotime($r['ondat']."+1day"));

for ($i=0; $i <3 ; $i++) { 
    $kd=date("Y-m-d l",strtotime($r['ondat']."+".$i."day"));
    $kk=date("Y-m-d",strtotime($r['ondat']."+".$i."day"));

    if($kd>=$date){
        echo "<option value='".$kk."'>".$kd."</option>";
    }
}


?>