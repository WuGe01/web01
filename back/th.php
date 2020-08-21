<h1 class="ct">商品分類</h1>
<div class="ct">
    <form action="./api/add.php?table=th" method="post">
    新增大類分類:
    <input type="text" name="name" id="">
    <input type="hidden" name="parent" value="0">
    <input type="submit" value="新增">
    </form>
</div>
<div class="ct">
<form action="./api/add.php?table=th" method="post">
    新增中類分類:
    <select name="parent" id="">
<?php
$rows=all("th",['parent'=>0]);
foreach ($rows as $r) {
?>
<option value="<?=$r['id']?>"><?=$r['name']?></option>
<?php
}

?>
    </select>
    <input type="text" name="name" id="">
    <input type="submit" value="新增">
    </form>

</div>