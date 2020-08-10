<div>
<fieldset class="loginF">
<legend>忘記密碼</legend>

<table>
<tr>
    <td>請輸入信箱以查詢密碼</td>
</tr>
<tr>
    <td><input type="text" name="mil" id="mil"></td>
</tr>
<tr>
    <td><span id="tagert"></span></td>
</tr>
<tr>
    <td><input type="button" value="查詢" onclick="ckmil()"></td>
</tr>
</table>

</fieldset>
</div>
<script>
function ckmil() {
    let email=$("#mil").val()
    $.post("./api/forgetpw.php?title=login",{email},(e)=>{
        console.log(e)
        $("#tagert").html(e)
    })
}


</script>