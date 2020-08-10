<?php
include_once "../input/base.php";
$chk=col('news',['acc'=>$_SESSION['login'],"toid"=>$_POST['id']]);
if($chk>0){
del('news',['acc'=>$_SESSION['login'],"toid"=>$_POST['id']]);
}else{
save('news',['acc'=>$_SESSION['login'],"toid"=>$_POST['id']]);
}
?>