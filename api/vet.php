<?php
include_once "../input/base.php";
$m=find('que',$_GET['mo']);
$m['power']+=1;
$c=find('que',$_POST['power']);
$c['power']+=1;
save('que',$m);
save('que',$c);
to("../index.php?do=que");
?>