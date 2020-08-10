<div>
<fieldset style="margin:50px;">
    <legend>目前位置:首頁 > 問卷調查區 ><?=find('que',['id'=>$_GET["id"]])['name'];?></legend>

    <h4><?=find('que',['id'=>$_GET["id"]])['name'];?></h4>
<table>
<?php
$rows=all('que',['parent'=>$_GET["id"]]);
$total=q("select sum(power) FROM que WHERE parent = ".$_GET["id"]."");
foreach ($rows as $r) {
$math=($r['power']/$total);
?>
<tr>
    <td width="50%"><?=$r['name'];?></td>
    <td width="50%"><div class="QenDiv" style="width:<?=$math*80;?>%"></div><?=$r['power']?>票(<?=floor($math*10000)/100;?>%)</td>
</tr>
<?php    
}
?>
</table>
<div class="ct"><input type="button" value="返回" onclick="location.replace('index.php?do=que')"></div>
 </fieldset>

</div>