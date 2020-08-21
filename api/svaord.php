<?php
include_once "../input/base.php";
// print_r($_POST);
$_POST['gno']=serialize($_POST['gno']);
$_POST['gname']=serialize($_POST['gname']);
$_POST['gat']=serialize($_POST['gat']);
$_POST['gprice']=serialize($_POST['gprice']);
$_POST['total']=serialize($_POST['total']);
save("ord",$_POST);
print_r($_POST);
to("../index.php");
?>
