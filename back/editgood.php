<h1 class="ct">修改商品</h1>

<form action="./api/add3.php?title=good" method="post" enctype="multipart/form-data">
<table class="w-100">
    <tr>
        <td class="tt w-30 p20 ct">所屬大分類</td>
        <td class="pp p20 w-70">
        <select name="big" id="">
<?php
$gd=find("good",$_GET['id']);
$rows=all("th",['parent'=>0]);
foreach ($rows as $r) {
?>
<option value="<?=$r['id']?>" <?=($gd['big']=$r['id'])?"selected":"";?>><?=$r['name']?></option>
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
<option value="<?=$r['id']?>" <?=($gd['mid']=$r['id'])?"selected":"";?>><?=$r['name']?></option>
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
        <input type="hidden" name="no" value="<?=$gd['no'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 p20 ct">商品名稱</td>
        <td class="pp p20 w-70">
            <input type="text" name="name" value="<?=$gd['name'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 p20 ct">商品價格</td>
        <td class="pp p20 w-70">
        <input type="text" name="price" value="<?=$gd['price'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 p20 ct">規格</td>
        <td class="pp p20 w-70">
        <input type="text" name="level" value="<?=$gd['level'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 p20 ct">庫存量</td>
        <td class="pp p20 w-70">
        <input type="text" name="qt" value="<?=$gd['qt'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w-30 p20 ct">商品圖片</td>
        <td class="pp p20 w-70">
        <input type="text" name="img" value="<?=$gd['img'];?>" readonly>
        </td>
    </tr>
    <tr>
        <td class="tt w-30 p20 ct">商品介紹</td>
        <td class="pp p20 w-70">
<textarea name="info" id="" cols="30" rows="10"><?=$gd['info'];?></textarea>
        </td>
    </tr>
</table>
<div class="ct">
    <input type="hidden" name="id" value="<?=$gd['id'];?>">
<input type="submit" value="修改">|
<input type="reset" value="重置">|
<input type="button" value="取消" onclick="location.replace('back.php?do=th')">

</div></form>