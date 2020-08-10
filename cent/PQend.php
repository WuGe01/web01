<div>
<fieldset style="margin:50px;">
    <legend>目前位置:首頁 > 問卷調查區 ><?=find('que',['id'=>$_GET["id"]])['name'];?></legend>

    <h4><?=find('que',['id'=>$_GET["id"]])['name'];?></h4>
<form action="./api/selectQue.php" method="post">
<?php
$rows=all('que',['parent'=>$_GET["id"]]);
foreach ($rows as $r) {
    echo "<div><input type='radio' name='id' value='".$r['id']."'>".$r['name']."</div>";
}

?>

<div class="ct"><input type="submit" value="我要投票"></div>
</form>
 </fieldset>
</div>