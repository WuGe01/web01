<?php
include_once "../input/base.php";
$row=find('que',$_POST);
$row['power']+=1;
save('que',$row);
to("../index.php?do=que");
?>