<div>
<fieldset style="margin:50px;">
    <legend>帳號管理</legend>
    <form action="./api/del.php?title=login" method="post">
    <table>
    <tr class="step ct">
        <td width="33%" style="width: 300px;">帳號</td>
        <td width="33%">密碼</td>
        <td width="33%">刪除</td>
    </tr>
<?php
$rows=all('login',['sh'=>1]);
foreach ($rows as $r) {


?>
    <tr class="ct">
        <td><?=$r['acc'];?></td>
        <td><?=str_repeat("*",strlen($r['pw']));?></td>
        <td><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
    </tr>
<?php
}
?>
</table>
<div class="ct">
<input type="submit" value="確認修改">    
<input type="reset" value="清空選取"></div></form>
</fieldset>
<h1>新增會員</h1>
<div>*請設定您要註冊的帳號及密碼(最長12個字元)</div>
<form action="./api/newman2.php" method="post">
<table>
<tr>
    <td class="step">STEP1:登入帳號</td>
    <td><input type="text" name="acc" id=""></td>
</tr>
<tr>
    <td class="step">STEP2:登入密碼</td>
    <td><input type="password" name="pw" id=""></td>
</tr>
<tr>
    <td class="step">STEP3:再次確認密碼</td>
    <td><input type="password" name="pw2" id=""></td>
</tr>
<tr>
    <td class="step">STEP4:信箱(忘記密碼時使用)</td>
    <td><input type="text" name="email" id=""></td>
</tr>

<tr>
    <td>
    <input type="submit" value="新增">
    <input type="reset" value="清除">
    </td>
    <td></td>
</tr>
</table>
</form>


</div>