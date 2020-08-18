<?php
include_once "../input/base.php";

$rows=all("qt",['name'=>$_POST['name'],'sdat'=>$_POST['sdat'],'type'=>$_POST['type']]);
// return json_decode($r['seat']);
$tt=[];
foreach ($rows as $r) {
    # code...
   $t=json_decode($r['seat']);
   if(is_array($t)){
    $tt=array_merge($t,$tt);
   }else{
    $tt[]=$t;
   }
    // echo $r['seat'];
}
echo json_encode($tt);
// print_r($tt);
// print_r(json_decode($r['seat']));
?>