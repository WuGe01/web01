<?php
include_once "../input/base.php";
$r=find("th",$_POST['id']);
?>
<form action="./api/add.php?table=th" method="post">
    <input type="text" name="name" value="<?=$r['name'];?>">
    <input type="hidden" name="id" value="<?=$r['id'];?>">
    <input type="submit" value="確認修改">
</form>