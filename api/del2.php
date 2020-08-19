<?php
include_once "../input/base.php";
del("qt",$_POST['id']);
to("../index.php?do=order");
?>