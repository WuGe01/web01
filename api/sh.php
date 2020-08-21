<?php
include_once "../input/base.php";
$r=find($_POST['table'],$_POST['id']);
$r['sh']=$_POST['sh'];
save($_POST['table'],$r);
?>