<fieldset>
<form action="./api/poC.php" method="post">
<table>
    <tr class="ct">
        <td>編號</td>
        <td>標題</td>
        <td>顯示</td>
        <td>刪除</td>
    </tr>
<?php
$tatal=col('po','');
$mix=3;
$page=ceil($tatal/$mix);
$now=(!empty($_GET['p']))?$_GET['p']:1;
$start=($now-1)*$mix+1;
$SS=$start-1;
$rows=all("po",''," limit $SS,$mix");
$ii=$start;
foreach ($rows as $r) {
$ischk=($r['sh']==1)?"checked":""; 


?>
    <tr class="ct">
        <td><?=$ii;?></td>
        <td><?=$r['name'];?></td>
        <td><input type="checkbox" name="sh[]" value="<?=$r['id'];?>" <?=$ischk;?>></td>
        <td><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
        <input type="hidden" name="id[]" value="<?=$r['id'];?>">
    </tr>
<?php
$ii++;
}
?>
</table>
<div class="ct">
<a href="?do=news&p=<?=(($now-1)>0)?($now-1):1;?>"><</a>
<?php


for ($i=1; $i <= $page; $i++) { 
    if($i==$now){
        echo "<a style='font-size: 24px;' href='?do=news&p=".$i."'>".$i."</a>";
    }else{
        echo "<a href='?do=news&p=".$i."'>".$i."</a>";
    }
}

?>
<a href="?do=news&p=<?=(($now+1)<$page)?($now+1):$page;?>">></a>



</div>
<div class="ct"><input type="submit" value="確認修改"></div>
</form>
</fieldset>