<fieldset >

<legend>目前位置 : 首頁  > 問券調查 > <?=find('que',['id'=>$_GET['id']])['name'];?></legend>
<h2><?=find('que',['id'=>$_GET['id']])['name'];?></h2>
<?php
$rows=all('que',['parent'=>$_GET['id']]);
$f=find('que',['id'=>$_GET['id']]);
foreach ($rows as $r) {
$m=$r['power']/$f['power'];

?>

<div class="endDiv"><?=$r['name'];?></div><div class="endDiv">
    <div class="endDIV2" style="width: <?=floor($m*100);?>px;">&nbsp;</div><?=$r['power'];?>票( <?=floor($m*100);?>%)
</div>
<?php
}
?>
<div class="ct"><input type="button" value="返回" onclick="location.replace('index.php?do=que')"></div>
</fieldset>