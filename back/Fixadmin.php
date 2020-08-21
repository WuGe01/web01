<h1 class="ct">修改管理權限</h1>
<form action="./api/add.php?table=admin" method="post">
<?php
$r=find("admin",$_GET['id']);
$r['power']=unserialize($r['power']);
?>
<table style="width:100%">
<tr>
    <td class="tt">帳號</td>
    <td class="pp"><input type="text" name="acc" value="<?=$r['acc'];?>"></td>
</tr>
<tr>
    <td class="tt">密碼</td>
    <td class="pp"><input type="password" name="pw" value="<?=$r['pw'];?>"></td>
</tr>
<tr>
    <td class="tt">權限</td>
    <td class="pp">
    <input type="checkbox" name="power[]" <?=(in_array("商品分類與管理",$r['power']))?"checked":"";?> value="商品分類與管理">商品分類與管理<br>
    <input type="checkbox" name="power[]" <?=(in_array("訂單管理",$r['power']))?"checked":"";?> value="訂單管理">訂單管理<br>
    <input type="checkbox" name="power[]" <?=(in_array("會員管理",$r['power']))?"checked":"";?> value="會員管理">會員管理<br>
    <input type="checkbox" name="power[]" <?=(in_array("頁尾版權區管理",$r['power']))?"checked":"";?> value="頁尾版權區管理">頁尾版權區管理<br>
    <input type="checkbox" name="power[]" <?=(in_array("最新消息管理",$r['power']))?"checked":"";?> value="最新消息管理">最新消息管理
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    </td>
</tr>
</table>
<div class="ct">
    <input type="submit" value="確認">
    <input type="reset" value="重置">
</div>
</form>