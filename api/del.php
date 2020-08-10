<?php
include_once "../input/base.php";
$rows=all($_GET['title'],'');
foreach ($rows as $r) {
    if(in_array($r['id'],$_POST['del'])){
        del($_GET['title'],['id'=>$r['id']]);
    }
}
print_r($_POST);
to("../back.php?do=admin");

?>