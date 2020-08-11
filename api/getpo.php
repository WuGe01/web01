<?php
include_once "../input/base.php";
$rows=all('po',['type'=>$_POST['tpye']]);
foreach ($rows as $r) {
    echo "<div class='zzz' id='Z".$r['id']."' onclick='getmore(".$r['id'].")'>";
    echo $r['name'];
    echo "</div>";
    echo "<div style='display:none' id='X".$r['id']."'>";
    echo $r['text'];
    echo "</div>";
}


?>

