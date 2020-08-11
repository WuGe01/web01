
<fieldset>
    <legend>會員註冊</legend>

<div class="ct">*請設定您要註冊的帳號及密碼(最長12個字元)</div>
<form action="./api/addacc2.php" method="post">
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