<?php
include_once "../input/base.php";
del("good",['acc'=>$_SESSION['login'],'toid'=>$_GET['id']]);
to("../index.php?do=".$_GET['title']."");

?>