<fieldset>
    <legend>帳號管理</legend>
<form action="./api/accdel.php" method="post">
    <table>
        <tr class="ct">
            <td style="background-color:#CCC ;width:300px;">帳號</td>
            <td style="background-color:#CCC ;width:300px;">密碼</td>
            <td style="background-color:#CCC ;width:300px;">刪除</td>
        </tr>
<?php
$rows=all("admin",['sh'=>1]);
foreach ($rows as $r) {

?>
        <tr class="ct">
            <td><?=$r['acc'];?></td>
            <td><?=str_repeat("*",strlen($r['pw']));?></td>
            <td><input type="checkbox" name="del[]" value="<?=$r['id'];?>"></td>
            <input type="hidden" name="id[]"  value="<?=$r['id'];?>">
        </tr>
<?php
}
?>
    </table>
<div class="ct">
    <input type="submit" value="確認刪除">
    <input type="reset" value="清空選取">
</div>
</form>
<h1 class="ct">新增會員</h1>
<div class="ct">*請設定您要註冊的帳號及密碼(最長12個字元)</div>
<form action="./api/addacc.php" method="post">
<table style="margin:auto;">
    <tr>
        <td style="background-color:#CCC ;width:300px;">Step1.登入帳號</td>
        <td><input  type="text" name="acc" id=""></td>
    </tr>
    <tr>
        <td style="background-color:#CCC ;width:300px;">Step2.登入密碼</td>
        <td><input  type="text" name="pw" id=""></td>
    </tr>
    <tr>
        <td style="background-color:#CCC ;width:300px;">Step3.再次確認密碼</td>
        <td><input  type="text" name="pw2" id=""></td>
    </tr>
    <tr>
        <td style="background-color:#CCC ;width:300px;">Step4.信箱(忘記密碼時使用)</td>
        <td><input  type="text" name="mil" id=""></td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="新增">
    <input type="reset" value="清除">
</div>
</form>
</fieldset>