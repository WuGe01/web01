<?php
include_once "../input/base.php";
$rows=all($_GET['title'],'');

foreach ($rows as $r) {
        if(!empty($_POST['del']) && in_array($r['id'],$_POST['del'])){
            del($_GET['title'],['id'=>$r['id']]);
        }else{
            if(in_array($r['id'],$_POST['id'])){
                $f=find($_GET['title'],['id'=>$r['id']]);
                if(in_array($r['id'],$_POST['sh'])){
                    $f['sh']=1;
                }else{
                    $f['sh']=0;
                }
                save($_GET['title'],$f);
            }
        }
}
Print_r($_POST);

to("../back.php?do=pop");
?>