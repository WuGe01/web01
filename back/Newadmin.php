<h1 class="ct">新增管理權限</h1>
<form action="./api/add.php?table=admin" method="post">
<table style="width:100%">
<tr>
    <td class="tt">帳號</td>
    <td class="pp"><input type="text" name="acc" id=""></td>
</tr>
<tr>
    <td class="tt">密碼</td>
    <td class="pp"><input type="password" name="pw" id=""></td>
</tr>
<tr>
    <td class="tt">權限</td>
    <td class="pp">
    <input type="checkbox" name="power[]" value="商品分類與管理">商品分類與管理<br>
    <input type="checkbox" name="power[]" value="訂單管理">訂單管理<br>
    <input type="checkbox" name="power[]" value="會員管理">會員管理<br>
    <input type="checkbox" name="power[]" value="頁尾版權區管理">頁尾版權區管理<br>
    <input type="checkbox" name="power[]" value="最新消息管理">最新消息管理
    </td>
</tr>
</table>
<div class="ct">
    <input type="submit" value="確認">
    <input type="reset" value="重置">
</div>
</form>