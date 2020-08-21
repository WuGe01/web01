<h1 class="ct">編輯會員資料</h1>
<form action="./api/add.php?table=login" method="post">
<table style="width:100%">
<?php
$r=find("login",$_GET['id']);
?>
<tr>
    <td class="ct tt">帳號</td>
    <td class="pp w-80">
        <?=$r['acc'];?>
    </td>
</tr>
<tr>
    <td class="ct tt">密碼</td>
    <td class="pp">
        <?=$r['pw'];?></td>
</tr>

<tr>
    <td class="ct tt">姓名</td>
    <td class="pp">   <?=$r['name'];?></td>
</tr>
<tr>
    <td class="ct tt">累積交易額</td>
    <td class="pp">   <?=$r['qt'];?></td>
</tr>
<tr>
    <td class="ct tt">信箱</td>
    <td class="pp"><input type="text" name="mil" value="<?=$r['mil'];?>"></td>
</tr>
<tr>
    <td class="ct tt">地址</td>
    <td class="pp"><input type="text" name="addr" value="<?=$r['addr'];?>"></td>
</tr>
<tr>
    <td class="ct tt">電話</td>
    <td class="pp"><input type="text" name="tel" value="<?=$r['tel'];?>"></td>
</tr>
<tr>
</tr>
</table>
<div class="ct">
    <input type="hidden" name="id" value="'">
    <input type="submit" value="確認">
    <input type="reset" value="重置">
    <input type="button" value="取消" onclick="location.replace('back.php?do=login')">
</div>
</form>