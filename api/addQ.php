<?php
include_once "../input/base.php";
print_r($_POST);
save('que',['name'=>$_POST['name'],'parent'=>0]);
$r=find('que',['name'=>$_POST['name'],'parent'=>0]);
foreach ($_POST['Sname'] as $v) {
    # code...
    save('que',['name'=>$v,'parent'=>$r['id']]);
}
to("../back.php?do=que");
?>