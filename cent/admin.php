<h1 class="ct">管理登入</h1>
<form action="./api/admin.php" method="post">
<table class="mauto">
    <tr>
        <td width="100px" class="tt pqq">帳號：</td>
        <td width="300px" class="pp pqq">
        <input type="text" name="acc" id="">
        </td>
    </tr>
    <tr>
        <td class="tt pqq">密碼：</td>
        <td class="pp pqq">
        <input type="password" name="pw" id="">
        </td>
    </tr>
    <tr>
        <td  class="tt pqq">驗證碼：</td>
        <td  class="pp pqq">
<?php
$a=rand(1,10);
$b=rand(1,10);
?>
        <?=$a;?>
        +
        <?=$b;?>
        =
        <input type="hidden" name="chk2" value="<?=$a+$b;?>">
        <input type="text" name="chk" id="">
        </td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="確認">
</div>
</form>