<?php
include_once "../input/base.php";
del("movie",$_POST['id']);
to("../index.php?do=vv");
?>