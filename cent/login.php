<h1 class="">第一次登入</h1>
<a href="index.php?do=newman">
    <img src="./img/0413.jpg" alt="">
</a>
<h1 class="">會員登入</h1>
<form action="./api/login.php" method="post">
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