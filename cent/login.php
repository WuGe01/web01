<fieldset>
    <legend>會員登入</legend>
    <form action="./api/login.php" method="post">
    <table style="margin:auto;">
    <tr>
        <td style="background-color:#ccc;width:300px">帳號</td>
        <td style="width:300px"><input type="text" name="acc" id=""></td>
    </tr>
    <tr>
        <td style="background-color:#ccc">密碼</td>
        <td><input type="text" name="pw" id=""></td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="登入">
            <input type="reset" value="清除">
    </td>
        <td>
            <a href="?do=forget">忘記密碼</a>|
            <a href="?do=set">尚未註冊</a>
    </td>
    </tr>
    </table>
    </form>
</fieldset>