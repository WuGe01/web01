<h1 class="ct">新增會員</h1>
<form action="./api/add2.php?table=login" method="post">
<table style="width:100%">
<tr>
    <td class="ct tt">帳號</td>
    <td class="pp w-80"><input type="text" name="acc" id=""></td>
</tr>
<tr>
    <td class="ct tt">密碼</td>
    <td class="pp"><input type="password" name="pw" id=""></td>
</tr>

<tr>
    <td class="ct tt">姓名</td>
    <td class="pp"><input type="text" name="name" id=""></td>
</tr>
<tr>
    <td class="ct tt">信箱</td>
    <td class="pp"><input type="text" name="mil" id=""></td>
</tr>
<tr>
    <td class="ct tt">地址</td>
    <td class="pp"><input type="text" name="addr" id=""></td>
</tr>
<tr>
    <td class="ct tt">電話</td>
    <td class="pp"><input type="text" name="tel" id=""></td>
</tr>
<tr>
</tr>
</table>
<div class="ct">
<input type="hidden" name="qt" value="0">
    <input type="submit" value="確認">
    <input type="reset" value="重置">
</div>
</form>