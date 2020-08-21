<h1 class="ct">新增商品</h1>
<form action="./api/add3.php?title=good" method="post" enctype="multipart/form-data">
<table class="w-100">
    <tr>
        <td class="tt w-30 p20 ct">所屬大分類</td>
        <td class="pp p20 w-70">
        <select name="big" id="">
<?php
$rows=all("th",['parent'=>0]);
foreach ($rows as $r) {
?>
<option value="<?=$r['id']?>"><?=$r['name']?></option>
<?php
}
?>          
        </select>
        </td>
    </tr>
    <tr>
        <td class="tt w-30 p20 ct">所屬中分類</td>
        <td class="pp p20 w-70">
        <select name="mid" id="">
<?php
$rows=all("th",['sh'=>1]);
foreach ($rows as $r) {
?>
<option value="<?=$r['id']?>"><?=$r['name']?></option>
<?php
}
?>          
        </select>
        </td>
    </tr>
    <tr>
        <td class="tt w-30 p20 ct">商品編號</td>
        <td class="pp p20 w-70">
            完成分類後自動分類
        <input type="hidden" name="no" value="<?=date('md').rand(1,9).rand(1,9);?>">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 p20 ct">商品名稱</td>
        <td class="pp p20 w-70">
            <input type="text" name="name" value="">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 p20 ct">商品價格</td>
        <td class="pp p20 w-70">
        <input type="text" name="price" value="">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 p20 ct">規格</td>
        <td class="pp p20 w-70">
        <input type="text" name="level" value="">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 p20 ct">庫存量</td>
        <td class="pp p20 w-70">
        <input type="text" name="qt" value="">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 p20 ct">商品圖片</td>
        <td class="pp p20 w-70">
        <input type="file" name="img" value="">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 p20 ct">商品介紹</td>
        <td class="pp p20 w-70">
<textarea name="info" id="" cols="30" rows="10"></textarea>
        </td>
    </tr>
</table>
<div class="ct">
<input type="submit" value="新增">|
<input type="reset" value="重置">|
<input type="button" value="取消" onclick="location.replace('back.php?do=th')">

</div></form>