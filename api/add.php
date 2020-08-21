<?php
include_once "../input/base.php";
if(!empty($_POST['power']))$_POST['power']=serialize($_POST['power']);

save($_GET['table'],$_POST);

to("../back.php?do=".$_GET['table']."");
?>