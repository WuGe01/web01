<?php
include_once "../input/base.php";
print_r($_POST);
foreach ($_POST['id'] as $key => $value) {
    if(!empty($_POST['del']) && in_array($value,$_POST['del'])){
        del('po',['id'=>$value]);
    }else{
        $r=find('po',['id'=>$value]);
        $r['sh']=(in_array($value,$_POST['sh']))?1:0;
        save('po',$r);
    }
}
to("../back.php?do=news");
?>