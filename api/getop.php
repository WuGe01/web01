<?php
include_once "../input/base.php";
$rows=all('op',['type'=>$_POST['type']],'');
foreach ($rows as $r) {
    echo "<div onclick='getop2(".$r['id'].")'>".$r['name']."</div>";
}
?>