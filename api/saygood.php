<?php
include_once "../input/base.php";
save("good",['acc'=>$_SESSION['login'],'toid'=>$_GET['id']]);
to("../index.php?do=".$_GET['title']."");

?>