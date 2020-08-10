<?php
include_once "../input/base.php";
print_r($_POST);
save("que",['name'=>$_POST['name']]);
$f=find("que",['name'=>$_POST['name']]);
foreach ($_POST['Sname'] as $r) {
    save("que",['name'=>$r,"parent"=>$f['id']]);
}
to("../back.php?do=que");
?>