<fieldset >
    <form action="./api/vet.php?mo=<?=$_GET['id'];?>" method="post">
<legend>目前位置 : 首頁  > 問券調查 > <?=find('que',['id'=>$_GET['id']])['name'];?></legend>
<h2><?=find('que',['id'=>$_GET['id']])['name'];?></h2>
<?php
$rows=all('que',['parent'=>$_GET['id']]);
foreach ($rows as $r) {
    # code...

?>
<div><input type="radio" name="power" value="<?=$r['id'];?>"><?=$r['name'];?></div>
<?php
}
?>
<div class="ct"><input type="submit" value="我要投票"></div></form>
</fieldset>